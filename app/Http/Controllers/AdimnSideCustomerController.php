<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class AdimnSideCustomerController extends Controller
{
     public function index()     {
        $data = Customer::all()->toArray();
        return view('Admin.customerData', compact('data'));
       }

      public function profile($nic){
        return view('Admin.profile');
        //return redirect()->route('Admin.profile');
      }

      public function attendence($nic){
        return view('Admin.attendence');
      }

      public function shedule($nic){
        return view('Admin.shedule');
      }

      public function payment($nic){
        return view('Admin.payment');
      }

      public function delete(){
        return view('Admin.delete');
      }

}
