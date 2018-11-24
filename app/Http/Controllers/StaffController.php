<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Staff;
use App\User;
use App\Customer;
class StaffController extends Controller
{
    //validate and check the login details
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

   
        if(Auth::attempt($user_data) && Auth::user()->isadmin==1)
        // check the login details are correct and if the field of isadmin is true
        //isadmin is true only for staff users
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

    //validate and store staff login details in users table
    function store()
    {
        $this->validate(request(),[
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required|min:5',
            'isadmin'=>'required'
        ]);
        
        //if a user is staff user then the isadmin is true
        //so any time isadmin give true from staff registration form
        $pass1=request('password');
        $pass2=request('password_confirmation');

        //check if both passwords are same
        if($pass1==$pass2){
            $user=User::create(request(['username','email','password','isadmin']));
            auth()->login($user);
            return redirect()->to('/staffnextreg');
        }
        else{
            return redirect()->to('/staffreg');
        }

    }

    //validate and store staff personal details in staff table 
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
        
        //array for get position from index
        $pos=array('Athletic Trainer','Physical Therapist'
        ,'Medical Assistance','Sport Trainer','Badminton Trainer','Other');

        //create new staff  member

        $staff=new Staff;
        $staff->username = $request->input('username');
        $staff->position = $pos[$request->input('position')];
        $staff->firstname = $request->input('firstname');
        $staff->lastname = $request->input('lastname');
        $staff->nic = $request->input('nic');
        $staff->email = $request->input('email');
        $staff->address = $request->input('address');
        $staff->mobile = $request->input('mobile');
      

        //save staff member
        $staff->save();

        //redirect
        return redirect('/adminmenu')->with('success','Register successfull!');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'nic'=>'required',
            'email'=>'required',
            'address'=>'required',
            'mobile'=>'required',
        ]);
        
        $input=$request->only('username','firstname','lastname','nic','email','address','mobile');

        $username=$input['username'];
        $firstname=$input['firstname'];
        $lastname=$input['lastname'];
        $nic=$input['nic'];
        $email=$input['email'];
        $address=$input['address'];
        $mobile=$input['mobile'];
        
        $sql="update staff SET firstname='$firstname',lastname='$lastname',nic='$nic',
        email='$email',address='$address',mobile='$mobile' WHERE username='$username'";
        \DB::update($sql);
        return redirect()->to('/staffs');
    }

    public function changePass(Request $request)
    {
        $this->validate(request(),[
            'oldpassword'=>'required|min:5',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required|min:5'
        ]); 

        $input=$request->only('username','oldpassword','password','password_confirmation');

        $username=$input['username'];
        $password=$input['password'];

        $dbpass=bcrypt($password);

        $user_data=array(
            'email' => $request->get('username'),
            'password' => $request->get('oldpassword')
        );

        if(Auth::attempt(array('username'=>$request->username,'password'=>$request->oldpassword))){
            $sql="update users SET password='$dbpass' where username='$username'";
            \DB::update($sql);
            return redirect()->to('/staffs');
        }
        else{
            return redirect()->to('/staffpasschange')->with('error','Invalid old password!');;
        }
    }

    public function getStaff(){
        $staffs=Staff::all();
        return view('staffs')->with('staffs',$staffs);
    }

    public function getStaff2(){
        $staffs=Staff::all();
        return view('staffupdate')->with('staffs',$staffs);
    }

    public function getStaff3(){
        $staffs=Staff::all();
        return view('staffpasschange')->with('staffs',$staffs);
    }

    function getCustomerUsers(){
        $customers=Customer::all();
        return view('viewcustomer')->with('customers',$customers);
    }


}
