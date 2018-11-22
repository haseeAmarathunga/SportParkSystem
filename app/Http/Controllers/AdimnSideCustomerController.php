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
}
