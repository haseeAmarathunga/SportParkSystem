<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Message;
class MainController extends Controller
{
    //
    function checklogin(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:3'
        ]);
    

        $user_data=array(
            'email' => $request->get('username'),
            'password' => $request->get('password')
        );
        $username=$request->get('username');
        // $email = $request->get('username');
        // $password = $request->get('password');
        
        if(Auth::attempt($user_data) && $username=='admin')
        // if($email=="admin" && $password="ha123")
        {
            return redirect('adminmenu');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()
    {
        return view('adminmenu');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/AdminLogin');
    }

    function getMessages(){
        $messages=Message::all();
        return view('messages')->with('messages',$messages);
    }
    public function StaffReg(){
        return view('staffreg');
    }

    public function StaffNextReg(){
        return view('staffnextreg');
    }


}
