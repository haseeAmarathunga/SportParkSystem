<!-- customer dashboard menu -->
@extends('layouts.app')

@section('content')

<!-- check if any customer is loggedin -->
@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()->username}}</strong>
        <br/>
        <a href="{{url('/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/home";</script>
@endif

<!-- show the show case with username and email -->
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


<!-- show the profile details in sidebar -->
</div>
@if(isset(Auth::user()->username))
    @section('sidebar')
        <div class="alert alert-danger">
        <h3><span class="glyphicon glyphicon-envelope"></span> Latest Announcement</h3>
        <hr>
        <!-- show the latest notice  -->
        @if(count($notices)>0)
            @foreach($notices as $notice)
                <ul class="list-group">
                    <li class="list-group-item">{{$notice->sender}} : {{$notice->created_at}}</li>
                    <li class="list-group-item">Notice : <b>{{$notice->message}}</b></li>
                    
                </ul>
                @break
                <!-- use break for only show one notice -->
            @endforeach
        @endif
        </div>
        <hr>
    <div class="alert alert-info">
    <!-- show the customer details -->
    @if(count($customers)>0)
        <!-- get all customers -->
        @foreach($customers as $customer)
            <!-- give the loggedin customer using if condition -->
            @if($customer->username==Auth::user()->username)
            <h3>
            <a href="/customers"><span class="glyphicon glyphicon-user"></span> My Profile</h3></a>
            <hr>
            <h4>Bio details : </h4><br/>
                <ul class="list-group">
                    <!-- show that loggedin customer basic details -->
                    <li class="list-group-item">FirstName : <b>{{$customer->firstname}}</b></li>
                    <li class="list-group-item">LastName : <b>{{$customer->lastname}}</b></li>
                    <li class="list-group-item">NIC : <b>{{$customer->nic}}</b></li>
                    <li class="list-group-item">Email : <b>{{$customer->email}}</b></li>
                    <li class="list-group-item">Address : <b>{{$customer->address}}</b></li>
                    <li class="list-group-item">MobileNo : <b>{{$customer->mobile}}</b></li>
                    <li class="list-group-item">
                    <a href="/updatecustomer"><b>Edit <span class="glyphicon glyphicon-edit"></span></b></a></li>
                    </li>
                    <hr>
                    <!-- btn for change password -->
                    <a href="/customerpasschange"><b>Change Password <span class="glyphicon glyphicon-lock"></span></b></a></li>
                   
                </ul>
            @endif
        @endforeach
    @endif
    <hr>
    <!-- show the pricing package customer that choose -->
    @if(count($packages)>0)
        @foreach($packages as $package)
            @if($package->username==Auth::user()->username)
            <h4><span class="glyphicon glyphicon-cart"></span> My Package : 
            <b>{{$package->package}} {{$package->groups}}</b></h4></a>            
            @endif
        @endforeach
    @endif
</div>

@endsection
@else
<!-- if anyone does not loggedin redirected to home page -->
<script>window.location="/home";</script>

@endif

<!-- buttons -->
<div class="navbar-header">
<a href="{{url('notices')}}">
<img src="img/icon/notice.png" width="200" height="120"></a>
</div>

<div class="navbar-header">
<a href="{{url('plans')}}">
<img src="img/icon/package.png" width="200" height="120"></a>
</div>

@endsection
