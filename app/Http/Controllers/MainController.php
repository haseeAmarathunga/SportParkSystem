<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
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

        if(Auth::attempt($user_data))
        {
            return redirect('AdminLogin/adminmenu');
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
        return redirect('AdminLogin');
    }

}
