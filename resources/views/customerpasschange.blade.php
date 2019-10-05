<!-- customer profile -->
@extends('layouts.app')

@section('content')

<!-- check if any customer member is loggedin -->
@if(isset(Auth::user()->username))
@else
    <!-- if anyone not loggedin redirect to stff login page -->
    <script>window.location="/";</script>
@endif

<!-- view the customer meber profile with all the details -->
@if(isset(Auth::user()->username))

    @section('sidebar')
    @if(count($customers)>0)
        @foreach($customers as $customer)
            @if($customer->username==Auth::user()->username)
            <div class="alert alert-info"><h3>
            <a href="/customers"><span class="glyphicon glyphicon-user"></span> My Profile</h3></a>
            <hr>
            <h4>Bio details : </h4><br/>
                <ul class="list-group">
                    <li class="list-group-item">FirstName : <b>{{$customer->firstname}}</b></li>
                    <li class="list-group-item">LastName : <b>{{$customer->lastname}}</b></li>
                    <li class="list-group-item">NIC : <b>{{$customer->nic}}</b></li>
                    <li class="list-group-item">Email : <b>{{$customer->email}}</b></li>
                    <li class="list-group-item">Address : <b>{{$customer->address}}</b></li>
                    <li class="list-group-item">MobileNo : <b>{{$customer->mobile}}  </b></li>
                    <li class="list-group-item">
                    <!-- <a href="/customerupdate"><b>Edit <span class="glyphicon glyphicon-edit"></span></b></a></li>
                    -->
                </ul></div>
            @endif
        @endforeach

    @endif

    @endsection
@else
<script>window.location="/customerLogin";</script>
@endif
<div class="well">
<div>
<a href="/customers"><button class="btn btn-default">back</button></a></div><hr>
<h3><span class="glyphicon glyphicon-lock"></span> Change password</h3>
<hr>
<!-- get all the customers -->
@foreach($customers as $customer)
    @if($customer->username==Auth::user()->username)
    {!! Form::open(['url'=>'customers/passchange']) !!}

    @if($message=Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{$message}}</strong>
        </div>
    @endif
    <div class="form-group">
    <!-- form for change password -->
    {{Form::label('username','Username')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <!-- {{Form::text('username','',['class'=>'form-control','value'=>"hasee",'readonly'])}} -->
        <input type="text" name="username" id="username" class="form-control" 
        value=<?php echo $customer->username;?> readonly>
    </div></div>

    <div class="form-group">
        {{Form::label('oldpass','Old Password')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <!-- enter old password field -->
        <input type="password" name="oldpassword" id="oldpassword" placeholder="Old Password"  class="form-control"  required>
    </div></div>

    <div class="form-group">
        {{Form::label('newpassword','New Password')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <!-- new password field -->
        <input type="password" name="password" id="password" placeholder="New Password" class="form-control" required>
    </div></div>

    <div class="form-group">
        {{Form::label('confirm','Confirm')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <!-- password confirm field -->
        <input type="password" name="password_confirmation" id="password_confirmation" 
        placeholder="Confirm Password" class="form-control" required>
    </div></div>

    <div>
        <!-- change password btn -->
        {{Form::submit('change',['class'=>'btn btn-success'])}}
    </div>

    {!! Form::close() !!}
    <!-- end of the form -->
    @endif
@endforeach
<hr>
</div>

@endsection