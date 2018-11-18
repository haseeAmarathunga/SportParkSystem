<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Staff;
use App\User;
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
        
        if(Auth::attempt($user_data) && Auth::user()->isadmin==1)
        // if($email=="admin" && $password="ha123")
        {
            return redirect('staffs');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()
    {
        return view('staffs');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/StaffLogin');
    }

    function store()
    {
        $this->validate(request(),[
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required|min:5',
            'isadmin'=>'required'

        ]);

        $pass1=request('password');
        $pass2=request('password_confirmation');


        if($pass1==$pass2){
            $user=User::create(request(['username','email','password','isadmin']));
            auth()->login($user);
            return redirect()->to('/staffnextreg');
        }
        else{
            return redirect()->to('/staffreg');
        }

    }

    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'position'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'nic'=>'required',
            'email'=>'required',
            'address'=>'required',
            'mobile'=>'required',
        ]);

        $pos=array('Athletic Trainer','Physical Therapist'
        ,'Medical Assistance','Sport Trainer','Badminton Trainer','Other');
        //create new message

        $staff=new Staff;
        $staff->username = $request->input('username');
        $staff->position = $pos[$request->input('position')];
        $staff->firstname = $request->input('firstname');
        $staff->lastname = $request->input('lastname');
        $staff->nic = $request->input('nic');
        $staff->email = $request->input('email');
        $staff->address = $request->input('address');
        $staff->mobile = $request->input('mobile');
      

        //save message
        $staff->save();

        //redirect
        return redirect('/adminmenu')->with('success','Register successfull!');
    }


    public function getStaff(){
        $staffs=Staff::all();
        return view('staffs')->with('staffs',$staffs);
    }

}
