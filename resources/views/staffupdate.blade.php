<!-- staff profile -->
@extends('layouts.app')

@section('content')

<!-- check if any staff member is loggedin -->
@if(isset(Auth::user()->username))
@else
    <!-- if anyone not loggedin redirect to stff login page -->
    <script>window.location="/StaffLogin";</script>
@endif

<!-- view the staff meber profile with all the details -->
@if(isset(Auth::user()->username))

    @section('sidebar')
    @if(count($staffs)>0)
        @foreach($staffs as $staff)
            @if($staff->username==Auth::user()->username)
            <div class="alert alert-info"><h3>
            <a href="/staffs"><span class="glyphicon glyphicon-user"></span> My Profile</h3></a>
            <hr>
            <h4>Bio details : </h4><br/>
                <ul class="list-group">
                    <li class="list-group-item">Position : <b>{{$staff->position}}</b></li>
                    <li class="list-group-item">FirstName : <b>{{$staff->firstname}}</b></li>
                    <li class="list-group-item">LastName : <b>{{$staff->lastname}}</b></li>
                    <li class="list-group-item">NIC : <b>{{$staff->nic}}</b></li>
                    <li class="list-group-item">Email : <b>{{$staff->email}}</b></li>
                    <li class="list-group-item">Address : <b>{{$staff->address}}</b></li>
                    <li class="list-group-item">MobileNo : <b>{{$staff->mobile}}  </b></li>
                    <li class="list-group-item">
                    <!-- <a href="/staffupdate"><b>Edit <span class="glyphicon glyphicon-edit"></span></b></a></li>
                    -->
                </ul></div>
            @endif
        @endforeach

    @endif

    @endsection
@else
<script>window.location="/StaffLogin";</script>
@endif
<div>
<a href="/staffs"><button class="btn btn-default">back</button></a></div><hr>
<h3>Update My Profile</h3>
<hr>

@foreach($staffs as $staff)
    @if($staff->username==Auth::user()->username)
{!! Form::open(['url'=>'staffs/update']) !!}

<div class="form-group">
    {{Form::label('username','Username')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- {{Form::text('username','',['class'=>'form-control','value'=>"hasee",'readonly'])}} -->
    <input type="text" name="username" id="username" class="form-control" 
    value=<?php echo $staff->username;?> readonly>
</div></div>

<div class="form-group">
    {{Form::label('email','Email')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="email" id="email" class="form-control" 
    value=<?php echo $staff->email;?> required>
</div></div>

<div class="form-group">
    {{Form::label('firstname','First Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="firstname" id="firstname" class="form-control" 
    value=<?php echo $staff->firstname;?> required>
</div></div>

<div class="form-group">
    {{Form::label('lastname','Last Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="lastname" id="lastname" class="form-control" 
    value=<?php echo $staff->lastname;?> required>
</div></div>

<div class="form-group">
    {{Form::label('nic','NIC')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="nic" id="nic" class="form-control" 
    value=<?php echo $staff->nic;?> required>
</div></div>

<div class="form-group">
    {{Form::label('address','Address')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="address" id="address" class="form-control" 
    value=<?php echo $staff->address;?> required>
</div></div>

<div class="form-group">
    {{Form::label('mobile','Mobile No')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="text" name="mobile" id="mobile" class="form-control" 
    value=<?php echo $staff->mobile;?> required>
</div></div>

<div>
    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
    @endif
@endforeach
<hr>


@endsection