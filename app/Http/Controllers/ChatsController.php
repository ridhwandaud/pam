<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Message;

class ChatsController extends Controller
{
	public function __construct()
	{
	  $this->middleware('auth');
	}

	public function index()
	{
		return view('user.chat');
	}

	public function fetchMessages()
	{
		return Message::with('user')->get();
	}

	public function sendMessage(Request $request)
	{
	  $user = Auth::user();

	  $message = $user->chats()->create([
	    'message' => $request->get('message')
	  ]);

	  broadcast(new MessageSent($user, $message))->toOthers();

	  return ['status' => 'Message Sent!'];
	}    
}
