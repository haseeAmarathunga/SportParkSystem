<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Customer;
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
        
        if(Auth::attempt($user_data) && Auth::user()->isadmin==0)
        // if($email=="admin" && $password="ha123")
        {
            return redirect('customers');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()
    {
        return view('customers');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

    public function store()
    {
        $this->validate(request(),[
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required|min:5',

        ]);

        $pass1=request('password');
        $pass2=request('password_confirmation');

        if($pass1==$pass2){
            $user=User::create(request(['username','email','password']));
            auth()->login($user);
            return redirect()->to('/next');
        }
        else{
            return redirect()->to('/signup');
        }

    }

    public function submit(Request $request){
        $this->validate($request,[
            'username'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'nic'=>'required',
            'email'=>'required',
            'address'=>'required',
            'mobile'=>'required',
        ]);

        //create new message
        $customer=new Customer;
        $customer->username = $request->input('username');
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->nic = $request->input('nic');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->mobile = $request->input('mobile');
      

        //save message
        $customer->save();

        //redirect
        return redirect('/home')->with('success','Register successfull!');
    }


    public function getCustomers(){
        $customers=Customer::all();
        return view('customers')->with('customers',$customers);
    }
}
