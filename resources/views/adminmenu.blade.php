<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome Admin</strong>
        <br/>
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/AdminLogin";</script>
@endif
@section('sidebar')
<h3><span class="glyphicon glyphicon-envelope"></span> Send Special Notice</h3>
<hr>
{!! Form::open(['url'=>'/']) !!}
<div class="form-group">
    {{Form::label('sender','Sender')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" name="sender" id="sender" placeholder="sender"readonly value={{Auth::user()->username}}>
</div></div>

<div class="form-group">
   {{Form::label('message','Message')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <input type="textarea" class="form-control" rows="5" name="message" id="message" placeholder="Enter Message">
</div></div>

<button class="btn btn-success"type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
                
{!! Form::close() !!}
<hr>


@endsection

<!-- buttons -->

<div class="navbar-header">
<a href="messages">
<img src="img/icon/message.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="staffreg">
<img src="img/icon/regstaff.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="">
<img src="img/icon/staff.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="{{url('customersopp')}}">
<img src="img/icon/customer.png" width="200" height="120"></a>

</div>

<hr>
@endsection
