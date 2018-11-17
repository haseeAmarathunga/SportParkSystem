<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
class CustomerController extends Controller
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

        // $email = $request->get('username');
        // $password = $request->get('password');
        
        if(Auth::attempt($user_data))
        // if($email=="admin" && $password="ha123")
        {
            return redirect('customermenu');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()
    {
        return view('customermenu');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
