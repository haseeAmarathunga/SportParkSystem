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
{!! Form::open(['url'=>'/addnotice']) !!}
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
<div class="alert alert-danger">
    <h3><span class="glyphicon glyphicon-envelope"></span> Notices</h3>
    <hr>
        
        @if(count($notices)>0)
            @foreach($notices as $notice)
                <ul class="list-group">
                    <li class="list-group-item">{{$notice->sender}} : {{$notice->created_at}}</li>
                    <li class="list-group-item">Notice : <b>{{$notice->message}}</b></li>
                    {!! Form::open(['url'=>'deletenotice']) !!}
                    <input type="text" readonly name="message" value="{{$notice->message}}">
                    <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span></button>
                    {!! Form::close() !!}
                </ul>
                <hr>
            @endforeach
        @endif
</div>
    
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
<a href="viewadminstaff">
<img src="img/icon/staff.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="{{url('customersopp')}}">
<img src="img/icon/customer.png" width="200" height="120"></a>
</div>
<div class="navbar-header">
<a href="{{url('groupallocate')}}">
<img src="img/icon/group.png" width="200" height="121"></a>
</div>

<hr>
@endsection
