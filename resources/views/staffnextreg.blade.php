<!-- include main layout -->
@extends('layouts.app')

@section('content')

<img src="img/f.jpg">

@section('sidebar')

<div class="well">
<!-- add personal details of staff final step -->
<div>
<h3>Personal Details</h3>
</div>
<hr>
{!! Form::open(['url'=>'staffreg/finish']) !!}

<div class="form-group">
    {{Form::label('username','Username')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('potision','Potision')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
    {{Form::select('position',['Athletic Trainer','Physical Therapist'
    ,'Medical Assistance','Sport Trainer','Badminton Trainer','Other'],'Athletic Trainer',['class'=>'form-control','id'=>'position'])}}
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


</div>
@endsection

@endsection