<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class sendmes implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public $chanel;
    public function __construct($text,$chanel)
    {
      $this->data=$text;
      $this->chanel=$chanel;
      DB::table("temp")->where("chanel",$chanel)
      ->update([
        "lastmes"=>$text,
        "time"=>Carbon::now('Asia/Ho_Chi_Minh')
      ]);
    }

    
    public function broadcastOn()
    {    
        
         return new PrivateChannel('private-'.$this->chanel);
    }
    public function broadcastAs()
    {
        return "test";
    }
}   
