<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Inbox;
use App\Customer;
use App\Notice;
use Mail;
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
        $messages=Message::orderby('id','desc')->get();
        return view('messages')->with('messages',$messages);
    }

    public function sendMessage(Request $request)
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

    public function sendMessageCustomer(Request $request)
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
        return redirect('viewcustomer')->with('success','Messaged success!');
    }

    public function replyMessage(Request $request)
    {
        $this->validate($request,[
            'message'=>'required',
            'reciever'=>'required'
        ]);

        //create new message
        $inbox=new Inbox;
        $inbox->sender = $request->input('sender');
        $inbox->reciever = $request->input('reciever');
        $inbox->message = $request->input('message');

        //save message
        $inbox->save();
        return redirect('messageinbox')->with('success','Messaged success!');

    }

    public function NewMessageAdmin(Request $request)
    {
        $this->validate($request,[
            'message'=>'required',
            'reciever'=>'required'
        ]);

        //create new message
        $inbox=new Inbox;
        $inbox->sender = $request->input('sender');
        $inbox->reciever = $request->input('reciever');
        $inbox->message = $request->input('message');

        //save message
        $inbox->save();
        return redirect('viewadminstaff')->with('success','Messaged success!');

    }

    public function NewMessageStaff(Request $request)
    {
        $this->validate($request,[
            'message'=>'required',
            'reciever'=>'required'
        ]);

        //create new message
        $inbox=new Inbox;
        $inbox->sender = $request->input('sender');
        $inbox->reciever = $request->input('reciever');
        $inbox->message = $request->input('message');

        //save message
        $inbox->save();
        return redirect('messageinbox')->with('success','Messaged success!');

    }

    public function viewInbox(){
        $inbox=Inbox::orderby('id','desc')->get();
        return view('messageinbox')->with('inbox',$inbox);
    }


    public function addNotice(Request $request)
    {
        $this->validate($request,[
            'message'=>'required',
            'sender'=>'required'
        ]);

        //create new message
        $notice=new Notice;
        $notice->sender = $request->input('sender');
        $notice->message = $request->input('message');

        //save message
        $notice->save();
        return redirect('adminmenu')->with('success','Noticed success!');

    }

    public function viewNotices(){
        $notices=Notice::orderby('id','desc')->get();
        return view('notices')->with('notices',$notices);
    }

    function deleteNotice(Request $request)
    {
        $this->validate($request,[
            'message'=>'required'
        ]);
        $input=$request->only('message');
        $msg=$input['message'];
        $sql="DELETE FROM notices where message='$msg'";
        \DB::delete($sql);
        return redirect()->to('/adminmenu');
        
    }

    function sendEmail(Request $request)
    {
        $this->validate($request,[
            'reply'=>'required',
            'email'=>'required',
            'name'=>'required'
        ]); 
        $email=$request->input('email');
        $reply=$request->input('reply');
        $name=$request->input('name');

        $data=array('email'=>"$name",'body'=>"$reply");
        Mail::send('email.mail',$data,function($message) use ($email,$name){
            $message->to($email,$name)
                    ->subject('BlueFether Web Forum Reply');
            $message->from('bluefether96@gmail.com','BlueFether');
        });
  
        $sql="DELETE FROM Messages WHERE email='$email'";
        \DB::delete($sql);
        return redirect('messages')->with('success','Email send successfull!');

        

    }

}
