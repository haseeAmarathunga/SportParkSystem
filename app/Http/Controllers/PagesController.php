<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
