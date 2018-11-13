@extends('layouts.app')

@section('content')

    <img src="img/a.jpg">

      <div class ="well"><div class="col-lg-6"></div>
      <div class = "col-lg-6">
      <a href="AdminLogin">
      <button type="button" class="btn btn-primary btn-lg btn-block" >
      <span class="glyphicon glyphicon-user"></span> Admin</button></a></div>
      <div class = "col-lg-6"></div></div>

      <div class ="well"><div class="col-lg-6"></div>
      <div class = "col-lg-6">
      <a href="StaffLogin">
      <button type="button" class="btn btn-warning btn-lg btn-block"> 
      <span class="glyphicon glyphicon-credit-card"></span> Staff</button></a></div>
      <div class = "col-lg-6"></div></div>
      

     
      <div class ="well"></div>



@endsection