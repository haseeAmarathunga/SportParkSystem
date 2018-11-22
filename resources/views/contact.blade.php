@extends('layouts.app')

@section('content')
<h1>Contact</h1>

<!-- contact forum -->
{!! Form::open(['url'=>'contact/submit']) !!}

    <div class="form-group">
        {{Form::label('name','Name')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name','required'])}}
    </div></div>

    <div class="form-group">
        {{Form::label('email','Email')}}
        <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        {{Form::text('email','',['class'=>'form-control','placeholder'=>'someone@gmail.com','required'])}}
    </div></div>
    <div class="form-group">
        {{Form::label('message','Message')}}
        <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Enter Message','required'])}}
    </div></div>

    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
<!-- end -->
<hr> 
@endsection

