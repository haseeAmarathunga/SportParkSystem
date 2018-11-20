<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()->username}}</strong>
        <br/>
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/AdminLogin";</script>
@endif

<!-- buttons -->
<div>
    <a href="messages"><button class="btn btn-primary btn-lg btn-block">Messages</button></a>
    <a href="staffreg"><button class="btn btn-success btn-lg btn-block">Register Staff</button></a>
    <a href=""><button class="btn btn-primary btn-lg btn-block">Staff</button></a>
    <a href=""><button class="btn btn-success btn-lg btn-block">Customers</button></a>
</div>



@endsection