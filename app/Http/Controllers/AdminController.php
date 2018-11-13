<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
        ]);
    }

}
