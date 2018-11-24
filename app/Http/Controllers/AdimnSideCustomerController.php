<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Customer;
use App\Scheduls;
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
        $val['nic']=$nic;
      //$data1 = Scheduls::all()->toArray();


        $data1 = Scheduls::select('nic','id','type','group','day','time')
                          ->where('day', '=', "Friday")
                          ->paginate(100);

        return view('Admin.shedule',compact('val','data1'));

      }

      public function payment($nic){
        return view('Admin.payment');
      }

      public function delete(){
        return view('Admin.delete');
      }



}
