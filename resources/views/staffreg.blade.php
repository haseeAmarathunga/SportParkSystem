@extends('layouts.app')

@section('content')

<img src="img/c.jpg">

@section('sidebar')
<div class="well">
<!-- add login details for register staff -->
<div>
<h3>Staff Registration</h3>
</div>
<hr>
{!! Form::open(['url'=>'staffreg/store']) !!}

<!-- form for staff registration -->
<div class="form-group">
    {{Form::label('username','Username')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- username -->
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('email','Email')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- email -->
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'someone@gmail.com','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('password','Password')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <!-- password -->
    {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter Password','required'])}}
</div></div>

<div class="form-group">
    {{Form::label('password_confirmation','ReEnter')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
    <!-- old password -->
    {{Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Re-enter Password','required'])}}
</div></div>
<div class="form-group">
    {{Form::label('agree','Confirm')}}
    <!-- check box for check as staff member -->
    {{Form::checkbox('isadmin',true,['class'=>'form-control','required'])}}
</div>
<div>
    {{Form::submit('Submit & Next',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}

</div>
@endsection

@endsection