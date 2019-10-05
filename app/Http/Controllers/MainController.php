<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Message;
use App\Customer;
use App\Notice;
use App\Staff;
use App\Group;
//admin controller
class MainController extends Controller
{
    //function for check the login details are valid
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
     
        
        if(Auth::attempt($user_data) && $username=='admin')
        // de-hashed the db password and compare the username and password with db details
        {
            return redirect('adminmenu');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }

    function successlogin() //if the login details are correct it go to adminMenu
    {
        $notices=Notice::orderby('id','desc')->get();
        return view('adminmenu')->with('notices',$notices);
    }

    function logout() //function for logout 
    {
        Auth::logout();
        return redirect('/AdminLogin');
    }

    //get all messages from message table
    function getMessages(){
        $messages=Message::all();
        return view('messages')->with('messages',$messages);
    }
    //get route for staff registration first step
    public function StaffReg(){
        return view('staffreg');
    }

    //get route for staff registration personal details
    public function StaffNextReg(){
        return view('staffnextreg');
    }


    public function allocateGroup(){
        $staffs=Staff::all();
        return view('groupallocate')->with('staffs',$staffs);
    }

    public function addTrainer(Request $request)
    {
        $this->validate($request,[
            'groupname'=>'required',
            'leadtrainer'=>'required',

        ]);
        
        $input=$request->only('groupname','leadtrainer');

        $groupno=$input['groupname'];
        $leadtrainer=$input['leadtrainer'];
        
        $gro=array('Badminton','Weight Lifting','Sports','Exercices');
        
        $groupname=$gro[$groupno];
        $sql="update groups SET leadtrainer='$leadtrainer' WHERE name='$groupname'";
        \DB::update($sql);
        return redirect()->to('/groupallocate')->with('success','Added Successfull!');
    }
}
