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
        <!-- get the logged in customer details -->
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
                
                </ul></div>
            @endif
        @endforeach

    @endif

    @endsection
@else
<script>window.location="/customerLogin";</script>
@endif
<div>
<a href="/customers"><button class="btn btn-default">back</button></a></div><hr>
<h3><span class="glyphicon glyphicon-edit"></span> Update My Profile</h3>
<hr>
<!-- get customer details -->
@foreach($customers as $customer)
    @if($customer->username==Auth::user()->username)
{!! Form::open(['url'=>'customers/update']) !!}
<!-- automatically filled that get details -->
<div class="form-group">
    {{Form::label('username','Username')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- {{Form::text('username','',['class'=>'form-control','value'=>"hasee",'readonly'])}} -->
    <input type="text" name="username" id="username" class="form-control" 
    value=<?php echo $customer->username;?> readonly>
</div></div>

<div class="form-group">
    {{Form::label('email','Email')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- email -->
    <input type="text" name="email" id="email" class="form-control" 
    value=<?php echo $customer->email;?> required>
</div></div>

<div class="form-group">
    {{Form::label('firstname','First Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- firstname -->
    <input type="text" name="firstname" id="firstname" class="form-control" 
    value=<?php echo $customer->firstname;?> required>
</div></div>

<div class="form-group">
    {{Form::label('lastname','Last Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- lastname -->
    <input type="text" name="lastname" id="lastname" class="form-control" 
    value=<?php echo $customer->lastname;?> required>
</div></div>

<div class="form-group">
    {{Form::label('nic','NIC')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- nic -->
    <input type="text" name="nic" id="nic" class="form-control" 
    value=<?php echo $customer->nic;?> required>
</div></div>

<div class="form-group">
    {{Form::label('address','Address')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- address -->
    <input type="text" name="address" id="address" class="form-control" 
    value=<?php echo $customer->address;?> required>
</div></div>

<div class="form-group">
    {{Form::label('mobile','Mobile No')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- mobile no -->
    <input type="text" name="mobile" id="mobile" class="form-control" 
    value=<?php echo $customer->mobile;?> required>
</div></div>

<div>
    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
<!-- end of the form -->
    @endif
@endforeach
<hr>


@endsection