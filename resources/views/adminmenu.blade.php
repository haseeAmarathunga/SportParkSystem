@extends('layouts.app')

@section('content')

@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()->username}}</strong>
        <br/>
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/AdminLogin";</script>
@endif

<div>
    <a href="messages"><button class="btn btn-primary btn-lg">Messages</button></a>
    <a href=""><button class="btn btn-success btn-lg">Register Staff</button></a>
</div>



@endsection