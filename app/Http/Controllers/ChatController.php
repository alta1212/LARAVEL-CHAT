<?php

namespace App\Http\Controllers;

use App\Models\boxchat;
use Illuminate\Support\Facades\DB;
use App\Models\friends;
use App\Models\message;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Events\sendmes;
use Debugbar;
use Illuminate\Support\Facades\Cookie;
class ChatController extends Controller
{

   function forward(Request $r)
   {
     
      $r->validate([
         'chanel'=>'required',
         'id'=>'required'
        ]);
        $mes=message::where("messageid",$r->id)->first();
        message::where("chanel",$r->chanel)->insert(
         [
            'sender' =>session()->get('id'),
            'type'=>$mes->type,
            'chanel'=>$r->chanel,
            'time'=>Carbon::now()->toDateString(),
            'content'=>$mes->content
         ]
      );
   }
    function index()
    {
    
      //return DB::table("temp")->where("_with",session("id"))->orderBy('time','ASC')->get();
     

       if(session()->has("id"))
       { 

         //$value = session()->get('id');
         $dataUser=[
            "userInfo"=> User::where('userid','=',session()->get('id'))->first(),
            "listFriend"=> boxchat::where('user1',session()->get('id'))
            ->orWhere('user2',session()->get('id'))
            ->get(),
            "listChat"=>DB::table("temp")->where("_with",session("id"))->orderBy('time','desc')->get(),
            "listGruop"=>DB::table('groupChat')
            ->whereIn('id',function($query) {
                                 $query->from('gruopChatMember')
                                    ->where('memberid',session()->get('id'))
                                    ->select('groupchatid');
                                })
            ->get()
         ];
        
       }
       return view('main.chat',$dataUser);
    }
    function logout()
    {
 
      if(session()->has("id"))
      {
         
         session()->pull("id");
        
         return redirect('/')->withCookie(Cookie::forget('id'));
      }
    }

    function filetrans(Request $r){
      
      $v=DB::table("Friend")->where([
        
         ['fromid', '=', $r->boxchat],
         ['receiverid', '=', session("id")],
         ['status', '=', "2"],
      ])->orWhere([
         ['fromid', '=',session("id")],
         ['receiverid', '=', $r->boxchat ],
         ['status', '=', "2"],
      ])->first();
      if($v)
      return "You  can not answer this conversation";
      $type="";
      $fileName = time().'_'. $r->file->getClientOriginalName();
      $file= $r->file->storeAs('upload/file/'.session()->get('id'), $fileName, 'public');
      $extension=$r->file->getClientOriginalExtension();
      $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
      if(in_array($extension,$imageExtensions))
      {
         $type="image";
      }
      elseif($extension=="mp4")
      {
         $type="video";
      }
      else
      {
         $type="file";
      }
 
         message::insert(
            [
               'sender' =>session()->get('id'),
               'type'=>$type,
               'chanel'=>$r->chanel,
               'time'=>Carbon::now()->toDateString(),
               'content'=>$file
            ]
         );
    
     
    }
    function sendMes(Request $r){
      $v=DB::table("Friend")->where([
        
         ['fromid', '=', $r->boxchat],
         ['receiverid', '=', session("id")],
         ['status', '=', "2"],
      ])->orWhere([
         ['fromid', '=',session("id")],
         ['receiverid', '=', $r->boxchat ],
         ['status', '=', "2"],
      ])->first();
     
      if($v) return "You  can not answer this conversation";

      $r->validate([
         'boxchat'=>'required|max:20',
         'message'=>'required',
      ]);
     
     
      event(new sendmes($r->message,$r->boxchat));
   //   event(new sendmes($r->message,$r->boxchat.'_'.session()->get('id')));
     
         $query=message::insert(
            [
               'sender' =>session()->get('id'),#mail           
               'content' =>$r->message,
               'type'=>'text',
               'chanel'=>$r->boxchat,
               'time'=>Carbon::now()->toDateString(),
            ]
         );
        
      
    }
    function loadMessage(Request $r)
    { 
      
      $data=[

         message::where('chanel',$r->chanel)->whereNotIn('messageid',function($query) {
                $query->from('messageStatus')->select('messegerid')->where('withUserid', session()->get('id'));   
            })
         ->orderBy('messageid','ASC')
         ->get()
      ];
      return $data;
    }
    function deletemes(Request $r)
    {
            DB::table("messageStatus")->insert([
               "withUserid"=>session()->get('id'),
               "messegerid"=>$r->id,
               "status"=>"1"
            ]);
         
    }
    
    function createGruop(Request $r)
    {
      
      $r->validate([      
         'id'=>'array',
         'Title'=>'required|min:5|max:18',
        ]);
      
      

      DB::table("groupChat")->insert([
         "tittle"=>$r->Title,
         "creator"=>session()->get('id'),
         "chanel"=>time().DB::getPdo()->lastInsertId()
      ]);
        
       $id= DB::getPdo()->lastInsertId();
      
       for ($i = 0; $i < count($r->id); $i++) {
         DB::table("gruopChatMember")->insert([
            "groupchatid"=>$id,
            "memberid"=>$r->id[$i]
         ]); 
        
      }
      DB::table("gruopChatMember")->insert([
         "groupchatid"=>$id,
         "memberid"=>session()->get('id')
      ]); 
    }
    function loadMessageGroup(Request $r)
    {
        $data=[
         DB::table('groupChatMessage')
         ->where('groupchatid',$r->id)
         ->get()
        ];
        return $data;
    }
    function sendMessageGroup(Request $r)
    {
      DB::table("groupChatMessage")->insert([
         "senderid"=>session()->get('id'),
         "content"=>$r->message,
         "time"=>Carbon::now()->toDateString(),
         "groupchatid"=>$r->id,
         "type"=>"text"
      ]);
    }
    function videochat(Request $r)
    {
         return view("videoCall");
    }
    function callVideo(Request $r)
    {
      $er=array('data'=>'callVideoNow','id'=>session()->get('id'));
      event(new sendmes($er,$r->boxchat));
    
    }
   function returncallVideo(Request $r)
   {
         if($r->call=="yes")
         {
            $er=array('data'=>'yes','call'=>'video');
           
            event(new sendmes($er,$r->boxchat));
         }
         else
         {
            $er=array('data'=>'no','call'=>'video');
          
            event(new sendmes($er,$r->boxchat));
         }
   }
}
   