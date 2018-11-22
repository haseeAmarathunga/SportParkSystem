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
<<<<<<< HEAD

<div>
    <a href="messages"><button class="btn btn-success btn-lg btn-block">Forum Messages</button></a>
    <a href="staffreg"><button class="btn btn-primary btn-lg btn-block">Register Staff</button></a>
    <a href="#"><button class="btn btn-success btn-lg btn-block">View Staff</button></a>
    <a href="{{url('customersopp')}}"><button class="btn btn-primary btn-lg btn-block"> Customers</button></a>
=======
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
>>>>>>> 280f9c395eb0f45748c3ae1313952d84c8604b5c
</div>

<hr>
@endsection
