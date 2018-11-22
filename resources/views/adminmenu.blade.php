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
