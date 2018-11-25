
@extends('layouts.app')

@section('content')

<!-- check if any staff member is loggedin -->
@if(isset(Auth::user()->username))
@else
    <!-- if anyone not loggedin redirect to stff login page -->
    <script>window.location="/StaffLogin";</script>
@endif

<div>
<a href="/staffs"><button class="btn btn-default">back</button></a></div><hr>

@section('sidebar')
<h3><span class="glyphicon glyphicon-envelope"></span> Send Messages</h3>
<hr>
{!! Form::open(['url'=>'/newmessage']) !!}
<div class="form-group">
    {{Form::label('sender','Sender')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" name="sender" id="sender" placeholder="sender"readonly value={{Auth::user()->username}}>
</div></div>
<div class="form-group">
   {{Form::label('reciever','Reciever')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" name="reciever" id="reciever" placeholder="Reciever Username">
</div></div>

<div class="form-group">
   {{Form::label('message','Message')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="textarea" class="form-control" name="message" id="message" placeholder="Enter Message">
</div></div>

<button class="btn btn-success"type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
                
{!! Form::close() !!}
<hr>
@endsection

<table class="table table-inverse">
<tr>
    <th>Username</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Package</th>
</tr>
@if(count($customers)>0)
    
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->username}}</td>
        <td>{{$customer->firstname}}</td> 
        <td>{{$customer->lastname}}</td> 
        <td>{{$customer->email}}</td>
        <td>{{$customer->mobile}}</td> 
        <td>{{$customer->address}}</td>  
        <td><b>
            @foreach($packages as $package)
                @if($package->username==$customer->username)
                    {{$package->package}}
                @endif
            @endforeach
        </b></td>   
    </tr> 
    @endforeach
    
@endif

</table>
@endsection