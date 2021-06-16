<?php

use App\Events\sendmes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use Illuminate\Console\Scheduling\Event;
use App\Http\Controllers\AccessTokenController;
use function PHPUnit\Framework\returnSelf;
use App\Events\why;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/cn',function()
// {
//     return view("ahi");
// });
// Route::post('/s',function(){
//     $message=request()->data;
    
//     event(new why($message));
//     return redirect("cn");
//  });
Route::post("forward",[ChatController::class,'forward'])->middleware("Login");
Route::post("forgot",[UserController::class,'sendresetpass'])->middleware("Login");
Route::post("backcallVideo",[ChatController::class,'returncallVideo'])->middleware("isLogin");
Route::post("callVideo",[ChatController::class,'callVideo'])->middleware("isLogin");
Route::post("blockuser",[UserController::class,'relationshipBlock'])->middleware("isLogin");
Route::post("createGruop",[ChatController::class,'createGruop'])->middleware("isLogin");
Route::post("/deletemes",[ChatController::class,'deletemes'])->middleware("isLogin");
Route::post('/createUser', [UserController::class,'createUser'])->name('auth.createUser');
Route::post('/doLogin', [UserController::class,'doLogin'])->name('auth.doLogin');
Route::post('/changeLoginInfo', [UserController::class,'changeLoginInfo']);
Route::post('/updateUser', [UserController::class,'updateUser'])->name('updateDataU');
Route::post('/auth', [UserController::class,'auth']);
Route::post('/searchFriend', [UserController::class,'searchFriend']);
Route::post('/filetrans', [ChatController::class,'filetrans'])->middleware("isLogin");
Route::post('/addFriend', [UserController::class,'addFriend']);
Route::post('sendMes', [ChatController::class,'sendMes']);
Route::post('/sendMesGruop',[ChatController::class,'sendMessageGroup']);
Route::post('answerFriendRequest', [UserController::class,'answerFriendRequest']);
Route::get('/loadMessage',[ChatController::class,'loadMessage']);
Route::get('/getrecommend',[UserController::class,'RecomentUser']);
Route::get('access_token', [AccessTokenController::class,'generate_token']);
Route::get('/loadMessageGroup',[ChatController::class,'loadMessageGroup']);
Route::get('/chat',[ChatController::class,'index'])->middleware("isLogin");
Route::get('/logout', [ChatController::class,'logout'])->middleware("isLogin");
Route::get('/',[UserController::class,'login'])->middleware("Login");
Route::get('/getFriendRequest',[UserController::class,'getFriendRequest']);
Route::get('/videochat/{id?}',[ChatController::class,'videochat'])->middleware("isLogin");
Route::get('/passReset',function(){
    return view("auth.ResetPass");
})->middleware("Login");
Route::get("/set/{mail}/{pass}",[UserController::class,'setNewpass']);



