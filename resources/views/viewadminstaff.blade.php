
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

<!-- sidebar for message -->
@section('sidebar')
<h3><span class="glyphicon glyphicon-envelope"></span> Send Messages</h3>
<hr>
{!! Form::open(['url'=>'/newmessageadmin']) !!}
<div class="form-group">
    {{Form::label('sender','Sender')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- sender name automattically filled as loggedin user -->
    <input type="text" class="form-control" name="sender" id="sender" placeholder="sender"readonly value={{Auth::user()->username}}>
</div></div>
<div class="form-group">
   {{Form::label('reciever','Reciever')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- reciever username -->
    <input type="text" class="form-control" name="reciever" id="reciever" placeholder="Reciever Username">
</div></div>

<div class="form-group">
   {{Form::label('message','Message')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- message -->
    <input type="textarea" class="form-control" name="message" id="message" placeholder="Enter Message">
</div></div>

<button class="btn btn-success"type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
                
{!! Form::close() !!}
<hr>
@endsection

<table class="table table-inverse">
<tr>
    <th>Username</th>
    <th>Position</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th></th>
</tr>
<!-- view customer details as table field -->
@if(count($staffs)>0)
    
    @foreach($staffs as $staff)
    <tr>
        <td>{{$staff->username}}</td>
        <td>{{$staff->position}}</td>
        <td>{{$staff->firstname}}</td> 
        <td>{{$staff->lastname}}</td> 
        <td>{{$staff->email}}</td>
        <td>{{$staff->mobile}}</td> 
        <td>{{$staff->address}}</td>  
        <td><a href=""><span class="glyphicon glyphicon-envelope"></span></a></td>   
    </tr> 
    @endforeach
    
@endif

</table>
@endsection