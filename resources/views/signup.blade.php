@extends('layouts.app')

@section('content')

@section('sidebar')
@parent
@endsection

<div>
<h3>SignUp</h3>
</div>
<hr>
{!! Form::open(['url'=>'signup/store']) !!}

<div class="form-group">
    {{Form::label('username','Username')}}
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div>

<div class="form-group">
    {{Form::label('email','Email')}}
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'someone@gmail.com','required'])}}
</div>
<div class="form-group">
    {{Form::label('password','Password')}}
    {{Form::password('password',['class'=>'form-control','placeholder'=>'Enter Password','required'])}}
</div>
<div class="form-group">
    {{Form::label('password_confirmation','ReEnter')}}
    {{Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Re-enter Password','required'])}}
</div>
<div>
    {{Form::submit('Submit & Next',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}




@endsection