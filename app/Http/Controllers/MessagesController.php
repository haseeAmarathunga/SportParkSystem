<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Inbox;
class MessagesController extends Controller
{
    //validate details
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);

        //create new message
        $message=new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();

        //redirect
        return redirect('/')->with('success','Message Sent!');
    }

    //get saved messages from database message table
    public function getMessages(){
        $messages=Message::all();
        return view('messages')->with('messages',$messages);
    }

    public function sendMessage()
    {
        $this->validate($request,[
            'sender'=>'required',
            'reciever'=>'required',
            'message'=>'required'
        ]);

        //create new message
        $inbox=new Inbox;
        $inbox->sender = $request->input('sender');
        $inbox->reciever = $request->input('reciever');
        $inbox->message = $request->input('message');

        //save message
        $inbox->save();
    }

    public function replyMessage(Request $request)
    {
        $this->validate($request,[
            'message'=>'required'
        ]);

        //create new message
        $inbox=new Inbox;
        $inbox->sender = $request->input('sender');
        $inbox->reciever = $request->input('reciever');
        $inbox->message = $request->input('message');

        //save message
        $inbox->save();
        return redirect('messageinbox')->with('success','Reply success!');

    }
    public function viewInbox(){
        $inbox=Inbox::all();
        return view('messageinbox')->with('inbox',$inbox);
    }
}
