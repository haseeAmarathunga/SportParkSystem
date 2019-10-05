@extends('layouts.app')

@section('content')
@section('sidebar')
@parent
@endsection

<!-- add personal details in customer signup -->

<div class="col-sm-8">
<!-- form for add personal details of customers -->
{!! Form::open(['url'=>'signup/finish']) !!}
<div class="well">
<h3>Personal Details</h3>
<hr>
<div class="form-group">
    {{Form::label('username','Username')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- username -->
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('firstname','First Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- firstname -->
    {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'Enter First Name','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('lastname','LastName')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- lastname -->
    {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Enter Last Name','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('nic','NIC')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
    <!-- nic -->
    {{Form::text('nic','',['class'=>'form-control','placeholder'=>'NIC (Ex:941703190v)','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('email','Email')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- email -->
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('address','Address')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-home"></i></span>
    <!-- address -->
    {{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter Address','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('mobile','Mobile')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <!-- mobile -->
    {{Form::text('mobile','',['class'=>'form-control','placeholder'=>'Enter Mobile','required'])}}
</div></div>


<div>
    {{Form::submit('Finish',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
<!-- end of the form-->
<hr>
</div>
</div>

@endsection