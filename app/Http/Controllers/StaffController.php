<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
class StaffController extends Controller
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
            return redirect('staffmenu');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()
    {
        return view('staffmenu');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/StaffLogin');
    }

}
