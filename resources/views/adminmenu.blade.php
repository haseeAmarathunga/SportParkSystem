<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome Admin</strong>
        <br/>
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/AdminLogin";</script>
@endif
@section('sidebar')
<div class="jumbotron">
    <a href="messages"><button class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-envelope"></span> Forum Messages</button></a>
    <a href="staffreg"><button class="btn btn-default btn-lg ">
    <span class="glyphicon glyphicon-user"></span> Register Staff</button></a>
    <a href=""><button class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-eye-open"></span> View Staff Details</button></a>
    <a href=""><button class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-eye-open"></span> View Customers Details</button></a>
</div>
@endsection

<!-- buttons -->
<div class="navbar-header">
<a href="messages">
<img src="img/icon/message.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="staffreg">
<img src="img/icon/regstaff.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="">
<img src="img/icon/staff.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="">
<img src="img/icon/customer.png" width="200" height="120"></a>
</div>

<hr>
@endsection