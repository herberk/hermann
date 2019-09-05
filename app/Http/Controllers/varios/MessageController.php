<?php

namespace App\Http\Controllers\varios;

use App\Events\MessageSentEvent;
use App\Models\varias\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('varias.chat');
    }


    public function fetch()
    {
    	return Message::with('user')
             ->orderBy('created_at','desc')   //DESC
            ->get();
    }

    public function sentMessage()
    {
        $user = Auth::user();

    	$message = $user->messages()->create([
    		'message' => request()->message
    	]);
        broadcast(new MessageSentEvent($user, $message));
    }
}
