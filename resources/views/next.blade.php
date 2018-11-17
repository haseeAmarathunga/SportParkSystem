@extends('layouts.app')

@section('content')

@section('sidebar')
@parent
@endsection

<div>
<h3>Personal Details</h3>
</div>
<hr>
{!! Form::open(['url'=>'signup/finish']) !!}

<div class="form-group">
    {{Form::label('username','Username')}}
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div>
<div class="form-group">
    {{Form::label('firstname','First Name')}}
    {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'Enter First Name','required'])}}
</div>
<div class="form-group">
    {{Form::label('lastname','LastName')}}
    {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Enter Last Name','required'])}}
</div>
<div class="form-group">
    {{Form::label('nic','NIC')}}
    {{Form::text('nic','',['class'=>'form-control','placeholder'=>'NIC (Ex:941703190v)','required'])}}
</div>
<div class="form-group">
    {{Form::label('email','Email')}}
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email','required'])}}
</div>

<div class="form-group">
    {{Form::label('address','Address')}}
    {{Form::text('address','',['class'=>'form-control','placeholder'=>'Enter Address','required'])}}
</div>

<div class="form-group">
    {{Form::label('mobile','Mobile')}}
    {{Form::text('mobile','',['class'=>'form-control','placeholder'=>'Enter Mobile','required'])}}
</div>

<div class="form-group">
    {{Form::label('male','Male')}}
    {{Form::radio('gender','male',['class'=>'form-control'])}}
    {{Form::label('female','Female')}}
    {{Form::radio('gender','female',['class'=>'form-control'])}}
</div>

<div>
    {{Form::submit('Finish',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}




@endsection