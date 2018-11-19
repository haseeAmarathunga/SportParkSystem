<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Customer;
class CustomerController extends Controller
{
    //function for check login details
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
        // Auth::attept() compare the user input email and password match with db value
        {
            return redirect('customers');
        }else
        {
            return back()->with('error','Wrong Login Details!');
        }
    }
    function successlogin()//if login details are correct it's go to customers page.
    {
        return view('customers');
    }

    function logout()//this is for logout 
    {
        Auth::logout();
        return redirect('/home');
    }

    //store the first step login details in user table
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

    //store the final step personal details in customer table
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

        //create a new Customer object
        $customer=new Customer;
        $customer->username = $request->input('username');
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->nic = $request->input('nic');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->mobile = $request->input('mobile');
      

        //save that customer
        $customer->save();

        //redirect to the home page
        return redirect('/home')->with('success','Register successfull!');
    }

    //load all customers and we can filter that using $customer variable
    public function getCustomers(){
        $customers=Customer::all();
        return view('customers')->with('customers',$customers);
    }
}
