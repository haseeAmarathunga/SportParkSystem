<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//get routes of links
class PagesController extends Controller
{
    public function getHome(){
        return view('home');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
    public function getPlans(){
        return view('plans');
    }

    public function getLogin(){
        return view('login');
    }

    public function getLoginWin(){
        return view('loginwin');
    }

    public function getAdminLogin(){
        return view('AdminLogin');
    }

    public function getStaffLogin(){
        return view('StaffLogin');
    }

    public function getSignup(){
        return view('signup');
    }

    public function getNext(){
        return view('next');
    }

    public function getCustomers(){
        return view('customers');
    }

    public function getStaffNext(){
        return view('staffnextreg');
    }

    public function getStaffUpdate(){
        return view('staffupdate');
    }

    public function getStaffPassChange(){
        return view('staffpasschange');
    }

    public function getCustomersPassChange(){
        return view('customerpasschange');
    }

    public function getCustomerUpdate(){
        return view('updatecustomer');
    }

    public function getMessageInbox(){
        return view('messageinbox');
    }
    
}
