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
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('firstname','First Name')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'Enter First Name','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('lastname','LastName')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Enter Last Name','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('nic','NIC')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
    {{Form::text('nic','',['class'=>'form-control','placeholder'=>'NIC (Ex:941703190v)','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('email','Email')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('address','Address')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-home"></i></span>
    {{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter Address','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('mobile','Mobile')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    {{Form::text('mobile','',['class'=>'form-control','placeholder'=>'Enter Mobile','required'])}}
</div></div>


<div>
    {{Form::submit('Finish',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}
<!-- end -->
<hr>
</div>
</div>

@endsection