<!-- include main layout -->
@extends('layouts.app')

@section('content')

@section('sidebar')
@parent
@endsection

<!-- add personal details of staff final step -->
<div>
<h3>Personal Details</h3>
</div>
<hr>
{!! Form::open(['url'=>'staffreg/finish']) !!}

<div class="form-group">
    {{Form::label('username','Username')}}
    {{Form::text('username','',['class'=>'form-control','placeholder'=>'Enter Username','required'])}}
</div>

<div class="form-group">
    {{Form::label('potision','Potision')}}
    {{Form::select('position',['Athletic Trainer','Physical Therapist'
    ,'Medical Assistance','Sport Trainer','Badminton Trainer','Other'],'Athletic Trainer',['class'=>'form-control','id'=>'position'])}}
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


<div>
    {{Form::submit('Finish',['class'=>'btn btn-primary'])}}
</div>

{!! Form::close() !!}




@endsection