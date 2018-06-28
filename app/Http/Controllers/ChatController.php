<?php

namespace App\Http\Controllers;
use App\Message;
use Redis;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getMessages()//get messages
    {
        $messages = Message::all();

        return response()->json($messages,200);
    }
    public function sendMessage(Request $request)//send messages
    {
        $data = $request->only(['name','body']);
        $message = Message::create($data);

        $redis = Redis::connection();
        $redis->publish('message',json_encode($message));
        
        return response()->json($message,200);
    }
}
