<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use App\Models\friends;
use Directory;
use Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Pusher\Pusher;
use \DomainException;
use \InvalidArgumentException;
use \UnexpectedValueException;
use \DateTime;
use Redirect;
use Carbon\Carbon;
use Debugbar;
use App\Mail\MyMail;
use Mail;
//https://github.com/barryvdh/laravel-debugbar/blob/master/readme.md
use Illuminate\Support\Facades\Cookie;
class UserController extends Controller
{
   
   public function login()
   {
      
      if(Cookie::get('id')!="")
      {
        session()->put('id',Cookie::get('id'));
        redirect("chat");
      }
      //  Debugbar::info(Cookie::get('id'));
       return view("auth.login");
   }
   public function createUser(Request $request)
   {
    
         //kiểm tra đầu vào
         //resources/lang/en/validation.php nơi quy tắc được đặt
        $request->validate([
         'name'=>'required|max:20',
         'email'=>'required|email|unique:user',
         'password'=>'required|min:5|max:100',

        ]);

         //dùng câu query
         $query=DB::table('user')->insert(
            [
               'email' =>$request->email,#mail
               'pass' =>Hash::make($request->password),//hash để mã hoá mật khẩu 
               'name' =>$request->name,
               'avata'=>'DefaultAvt.jpg',
               'mota'=>'This person has not set a description',
               'joindate'=>Carbon::now()->toDateString(),
               'diachi'=>'This person has not set a adress'
            ]
         );
         if($query)
         {
               return back()->with('xong','ờ m vào được rồi');
         }
         else
         {
            return back()->with('loi','Có lỗi xảy ra vui long thử lại sau');
         }
         

   } 

   public function relationshipBlock(Request $request)
   {
     // DB::enableQueryLog();   
     $sql= DB::table('Friend')->where([
        
         ['fromid', '=', $request->iduser],
         ['receiverid', '=', session("id")],
      ])->orWhere([
         ['fromid', '=',session("id")],
         ['receiverid', '=', $request->iduser ],
      ])->first();
   
      if($sql->status==1)
      {
         DB::table('Friend')->where([
        
            ['fromid', '=', $request->iduser],
            ['receiverid', '=', session("id")],
         ])->orWhere([
            ['fromid', '=',session("id")],
            ['receiverid', '=', $request->iduser ],
         ])->update([
               "status"=>"2"
            ]);
      }
      else
      {  
         DB::table('Friend')->where([
        
            ['fromid', '=', $request->iduser],
            ['receiverid', '=', session("id")],
         ])->orWhere([
            ['fromid', '=',session("id")],
            ['receiverid', '=', $request->iduser ],
         ])->update([
            "status"=>"1"
         ]);
      }
   }

   public function doLogin(Request $request)
   { 
  
     
      
      $request->validate([      
         'email'=>'required|email',
         'password'=>'required|min:5|max:18',
        ]);
      //nếu đầu vào hợp lệ thì cho đăng nhập
      //kiểm tra email đã tồn tại chưa
      $user= User::where('email','=',$request->email)->first();
       
      if($user)
      {  
           
         //nếu có tồn tại mail thì kiểm tra mật khẩu
         if(Hash::check($request->password,$user->pass))
         {  
            $request->session()->put('id',$user->userid);
            if($request->has('remember'))
               {
                  $lifetime = time() + 60 * 60 * 24 * 365;// one year
            
                  //nêu có thì lưu vào secction
                 
                  return redirect("/chat")->withCookie(Cookie::make('id', $user->userid, $lifetime));
               } 
               return redirect("/chat");
            
         }
         else
         {  
            return Redirect::back()->withErrors(['msg', 'The Message']);
         }
      }
      else
      {
         return Redirect::back()->withErrors(['msg', 'The Message']);
      }
   }
   public function auth()
   { 
      // $user= DB::table('Friend')
      // ->Where(function($query) {
      //     $query->orWhere('fromid', session()->get('id'))
      //           ->orWhere('receiverid',  session()->get('id'))
      //           ->where('status', "1");
      // })
      // ->first();
     
      if(true)
      {
          $pusher=new Pusher("b708a607270d00087a1f","6386e28cedf126f8a592","1175239");
          return $pusher->socket_auth($_POST["channel_name"],$_POST["socket_id"]);
      }
      else
      {
         abort(403);
      }
     
   }
 
   public function updateUser(Request $request)
   {    $file="";
    if($request->avt) {
       
        $fileName = time().'_'.$request->avt->getClientOriginalName();
           
        $file=$request->file('avt')->storeAs('avataUser/'.session()->get('id'), $fileName, 'public');
    
     }
     
    $request->validate([
        'username'=>'required|max:20',
        'avt' => 'mimes:jpeg,bmp,png',
        'address'=>'max:100',
        'about'=>'max:500',
       ]);
       $query=DB::table('user')
       ->where('userid', session("id"))
       ->update(
        [
        
           'name' =>$request->username,
           'mota'=>$request->about,
           'diachi'=>$request->address
        ]
        );
            //nếu chọn ảnh
        if($file!="")
            {
               //xoá avt cũ trong sever
               $dataUser= User::where('userid','=',session()->get('id'))->first();
               if("DefaultAvt.jpg"!=$dataUser->avata)
               {
                  Storage::disk('public')->delete($dataUser->avata);
               }
               
               $query=DB::table('user')
               ->where('userid', session("id"))
               ->update(
                  [
                     'avata'=>$file
                  ]
                  );
        }
        if($query)
        {
            return redirect("chat")->with("xong","Update Complete");
        }
        
        
   }

   public function searchFriend(Request $request)
   {
           $result=[
               "ketqua"=>User::where('email','LIKE','%'.$request->key.'%')
                ->orWhere('name','LIKE','%'.$request->key.'%')
                ->get()
           ];
           return $result;
   }
//sửa
   public function RecomentUser()
   {
        $dataUser=[
            
            "recoment"=>User::inRandomOrder()->limit(10)->whereNotIn('userid', function ($query) {
                $query->select('receiverid')->from('Friend');
                })
            ->orWhereNotIn('userid', function ($query) {
                    $query->select('fromid')->from('Friend');
                })
            ->get()
        ];
        return $dataUser;
     
   }

   public function addFriend(Request $r)
   {
      
    $query=friends::insert(
        [
           'fromid'=>session()->get('id'),
           'receiverid'=> $r->id,
           'status'=>'0',
           'time'=>Carbon::now()->toDateString()
        ]
     );
   
   
   }


   public function getFriendRequest(Request $r)
   {
  
    $data=[
        "FriendRequest"=>User::whereIn('userid',function($query) {
                    $query->from('Friend')
                    ->where('fromid',session()->get('id'))
                    ->orWhere('receiverid',session()->get('id'))
                    ->Where('status','0')
                    ->select('fromid');
                })
        ->orWhereIn('userid',function($query) {
                    $query->from('Friend')
                    ->where('fromid',session()->get('id'))
                    ->orWhere('receiverid',session()->get('id'))
                    ->Where('status','0')
                    ->select('receiverid');
                })->where('userid','!=',session()->get('id'))
        ->get()
    ];
    return $data;
   }

   function answerFriendRequest(Request $r){
       if(request()->answer==1)
       {
         $u=User::where("userid",request()->id)->first();
         
         $data=  friends::where(
            function($query) {
            $query->where('fromid',session()->get('id'))
            ->Where('receiverid',request()->id)
            ->Where('status','0');
            }
            )
            ->orWhere(
                function($query) {
                $query->where('fromid',request()->id)
                ->Where('receiverid',session()->get('id'))
                ->Where('status','0');
            }
            )->first();
            friends::where(
               function($query) {
               $query->where('fromid',session()->get('id'))
               ->Where('receiverid',request()->id)
               ->Where('status','0');
               }
               )
               ->orWhere(
                   function($query) {
                   $query->where('fromid',request()->id)
                   ->Where('receiverid',session()->get('id'))
                   ->Where('status','0');
               }
               )
            ->update(['status'=>request()->answer]);

            DB::select('call temp(?,?,?,?,?,?)',array($data->fromid,$u->name,$data->receiverid,$u->avata,$data->fromid."_".$data->receiverid,"Hello! we just being friend"));
            DB::select('call temp(?,?,?,?,?,?)',array($data->receiverid,$u->name,$data->fromid,$u->avata,$data->fromid."_".$data->receiverid,"Hello! we just being friend"));

       }
       
        else{
            friends::where(
                function($query) {
                $query->where('fromid',session()->get('id'))
                ->Where('receiverid',request()->id)
                ->Where('status','0');
                }
                )
                ->orWhere(
                    function($query) {
                    $query->where('fromid',request()->id)
                    ->Where('receiverid',session()->get('id'))
                    ->Where('status','0');
                }
                )
                ->delete();
        }

   }


   function changeLoginInfo(Request $request)
   {  
         
         $request->validate([      
           
            'password'=>'required|min:5|max:18',
            'phone'=>'phone:VN'
         ]);
         $user= User::where('userid','=',session()->get('id'))->first();
         if($request->email!=$user->email)
         {
            $request->validate([      
               'email'=>'required|email|unique:user'
            ]);
         }
         if($user)
         {  
            
         
            if(Hash::check($request->password,$user->pass))
            {  
               $query=DB::table('user')
               ->where('userid', session("id"))
               ->update(
               [
               
                  'phone' =>$request->phone,
                  'email'=>$request->email
               ]
               );
            }
            else
            {
               $error = \Illuminate\Validation\ValidationException::withMessages([
                  'error' => ['Password incorrect']
               ]);
               throw $error;
            }
         
         }
         else
         {
            $error = \Illuminate\Validation\ValidationException::withMessages([
               'error' => ['Something Went wrong']
            ]);
            throw $error;
         }
         
   }


    

   function sendresetpass(Request $request){
     
      $request->validate([      
         'email'=>'required|email|exists:user,email',
         'password'=>'required|min:5|max:18',
      ]);

      $newPass=Crypt::encryptString($request->password);
      $encryMail=Crypt::encryptString($request->email);
     // Crypt::decryptString($encryptedValue);
     $link=request()->getHost()."/set/".$newPass."/".$encryMail;
     Mail::to($request->email)->send(new MyMail($link));
     return $request->email;
   }

   function setNewpass($pass,$mail)
   {
     
      $mail=Crypt::decryptString($mail);
      $pass=Crypt::decryptString($pass);
      $query=DB::table('user')
               ->where('email',$mail)
               ->update(
               [
                  'pass'=>Hash::make($pass),//hash để mã hoá mật khẩu 
               ]
               );
      return redirect("/");
   }
}