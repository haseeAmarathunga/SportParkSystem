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
<div class="well">
</div>
@endsection

<!-- buttons -->

<div>
    <a href="messages"><button class="btn btn-success btn-lg btn-block">Forum Messages</button></a>
    <a href="staffreg"><button class="btn btn-primary btn-lg btn-block">Register Staff</button></a>
    <a href="#"><button class="btn btn-success btn-lg btn-block">View Staff</button></a>
    <a href=""><button class="btn btn-primary btn-lg btn-block">View Customers</button></a>
</div>



@endsection
