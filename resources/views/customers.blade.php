@extends('layouts.app')

@section('content')

@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()->username}}</strong>
        <br/>
        <a href="{{url('/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/home";</script>
@endif

<div class="jumbotron text-center">
    <div class="container">
        <div class="navbar-header">
        <img src="img/logo2.png" width="120" height="120">
        </div>
        @if(isset(Auth::user()->username))
        <h1>{{Auth::user()->username}}</h1>
        <p class="lead">{{Auth::user()->email}}</p>
        @endif
    </div>


</div>
@section('sidebar')
@if(count($customers)>0)
    @foreach($customers as $customer)
        @if($customer->username==Auth::user()->username)
        <h3>My Profile</h3><hr><h4>Bio details : </h4>
            <ul class="list-group">
                <li class="list-group-item">FirstName : <b>{{$customer->firstname}}</b></li>
                <li class="list-group-item">LastName : <b>{{$customer->lastname}}</b></li>
                <li class="list-group-item">NIC : <b>{{$customer->nic}}</b></li>
                <li class="list-group-item">Email : <b>{{$customer->email}}</b></li>
                <li class="list-group-item">MobileNo : <b>{{$customer->mobile}}</b></li>
            </ul>
        @endif
    @endforeach

@endif
@endsection
@endsection
