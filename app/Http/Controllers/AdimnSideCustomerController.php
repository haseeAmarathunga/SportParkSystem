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
        $customers = Customer::select('id','username','firstname','lastname','nic','email','address','mobile')
                          ->where('nic' ,'=',$nic)
                          ->paginate(100);
        return view('Admin.profile',compact('customers'));
        //return redirect()->route('Admin.profile');
      }

      public function attendence($nic){
        $val['nic']=$nic;
        //Sunday
        $data1 = Scheduls::select('nic','id','type','group','day','time')
                          ->where([['day', '=', "Sunday"] , ['nic' ,'=',$nic]])
                          ->paginate(100);
       //Monday
       $data2 = Scheduls::select('nic','id','type','group','day','time')
                             ->where([['day', '=', "Monday"] , ['nic' ,'=',$nic]])
                             ->paginate(100);

       //Tuesday
       $data3 = Scheduls::select('nic','id','type','group','day','time')
                               ->where([['day', '=', "Tuesday"] , ['nic' ,'=',$nic]])
                                 ->paginate(100);
       //Wednesday
       $data4 = Scheduls::select('nic','id','type','group','day','time')
                             ->where([['day', '=', "Wednesday"] , ['nic' ,'=',$nic]])
                             ->paginate(100);
       //Thursday
       $data5 = Scheduls::select('nic','id','type','group','day','time')
                             ->where([['day', '=', "Thursday"] , ['nic' ,'=',$nic]])
                             ->paginate(100);
     //Friday
       $data6 = Scheduls::select('nic','id','type','group','day','time')
                             ->where([['day', '=', "Friday"] , ['nic' ,'=',$nic]])
                             ->paginate(100);
     //Sataday
      $data7 = Scheduls::select('nic','id','type','group','day','time')
                           ->where([['day', '=', "Sataday"] , ['nic' ,'=',$nic]])
                           ->paginate(100);

      return view('Admin.attendence',compact('val','data1','data2','data3','data4','data5','data6','data7'));

        //return view('Admin.attendence',compact('val'));
      }

      public function shedule($nic){
        $val['nic']=$nic;
      //$data1 = Scheduls::all()->toArray();


                //Sunday
                $data1 = Scheduls::select('nic','id','type','group','day','time')
                                  ->where([['day', '=', "Sunday"] , ['nic' ,'=',$nic]])
                                  ->paginate(100);
               //Monday
               $data2 = Scheduls::select('nic','id','type','group','day','time')
                                     ->where([['day', '=', "Monday"] , ['nic' ,'=',$nic]])
                                     ->paginate(100);

               //Tuesday
               $data3 = Scheduls::select('nic','id','type','group','day','time')
                                       ->where([['day', '=', "Tuesday"] , ['nic' ,'=',$nic]])
                                         ->paginate(100);
               //Wednesday
               $data4 = Scheduls::select('nic','id','type','group','day','time')
                                     ->where([['day', '=', "Wednesday"] , ['nic' ,'=',$nic]])
                                     ->paginate(100);
               //Thursday
               $data5 = Scheduls::select('nic','id','type','group','day','time')
                                     ->where([['day', '=', "Thursday"] , ['nic' ,'=',$nic]])
                                     ->paginate(100);
             //Friday
               $data6 = Scheduls::select('nic','id','type','group','day','time')
                                     ->where([['day', '=', "Friday"] , ['nic' ,'=',$nic]])
                                     ->paginate(100);
             //Sataday
              $data7 = Scheduls::select('nic','id','type','group','day','time')
                                   ->where([['day', '=', "Sataday"] , ['nic' ,'=',$nic]])
                                   ->paginate(100);

        return view('Admin.shedule',compact('val','data1','data2','data3','data4','data5','data6','data7'));

      }

      public function payment($nic){
        return view('Admin.payment',compact('nic'));
      }

      public function delete(){
        return view('Admin.delete');
      }



}
