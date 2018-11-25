
@extends('layouts.app')

@section('content')

<!-- check if any staff member is loggedin -->
@if(isset(Auth::user()->username))
@else
    <!-- if anyone not loggedin redirect to stff login page -->
    <script>window.location="/StaffLogin";</script>
@endif

<div>
<a href="/adminmenu"><button class="btn btn-default">back</button></a></div><hr>

@section('sidebar')
<hr>
<div class="well">
<h3>Allocate Leader Trainer for Group </h3>
<hr>
{!! Form::open(['url'=>'/allocatetrainer']) !!}
<div class="form-group">
    {{Form::label('groupid','Group')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-group"></i></span>
    {{Form::select('groupname',['Badminton','Weight Lifting','Sports','Exercices'],'Badminton',
	['class'=>'form-control','id'=>'package'])}}
</div></div>

<div class="form-group">
    {{Form::label('traner','Trainer')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <select name="leadtrainer" class="form-control">
    @if(count($staffs)>0)
        @foreach($staffs as $staff)
        <option  value="{{$staff->username}}">{{$staff->firstname}} {{$staff->lastname}}</option>
        @endforeach
    @endif
    </select>
</div></div>
<button class="btn btn-success"type="submit">Add <span class="glyphicon glyphicon-send"></span></button>
              
{!! Form::close() !!}
<hr>
</div>
@endsection

<table class="table table-inverse">
<tr>
    <th>Username</th>
    <th>Position</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>

</tr>
@if(count($staffs)>0)
    
    @foreach($staffs as $staff)
    <tr>
        <td>{{$staff->username}}</td>
        <td>{{$staff->position}}</td>
        <td>{{$staff->firstname}}</td> 
        <td>{{$staff->lastname}}</td> 
        <td>{{$staff->email}}</td>
    </tr> 
    @endforeach
    
@endif

</table>
@endsection