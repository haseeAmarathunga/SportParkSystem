@extends('layouts.app')

@section('content')
<h1>Contact</h1>

<!-- contact forum -->
{!! Form::open(['url'=>'contact/submit']) !!}

    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name','required'])}}
    </div>

    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email','',['class'=>'form-control','placeholder'=>'someone@gmail.com','required'])}}
    </div>
    <div class="form-group">
        {{Form::label('message','Message')}}
        {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Enter Message','required'])}}
    </div>

    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
<!-- end -->
<hr> 
@endsection

