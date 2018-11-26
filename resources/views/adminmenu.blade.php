<!-- admin dashboard panel -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome Admin</strong>
        <br/>
        <!-- logout button -->
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div>
@else
    <!-- if the user is not admin then it's ridertct to admin login page -->
    <script>window.location="/AdminLogin";</script>
@endif

<!-- sidebar for post and view notices -->
@section('sidebar')
<h3><span class="glyphicon glyphicon-envelope"></span> Send Special Notice</h3>
<hr>
<!-- for for add notices for all -->
{!! Form::open(['url'=>'/addnotice']) !!}
<div class="form-group">
    {{Form::label('sender','Sender')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- give sender name as admin.It cannot be changed -->
    <input type="text" class="form-control" name="sender" id="sender" placeholder="sender"readonly value={{Auth::user()->username}}>
</div></div>

<div class="form-group">
   {{Form::label('message','Message')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- message textarea field -->
    <input type="textarea" class="form-control" rows="5" name="message" id="message" placeholder="Enter Message">
</div></div>

<button class="btn btn-success"type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
                
{!! Form::close() !!}
<!-- end of the form -->
<hr>

<!-- view notices -->
<div class="alert alert-danger">
    <h3><span class="glyphicon glyphicon-envelope"></span> Notices</h3>
    <hr>
        <!-- check if notices are found -->
        @if(count($notices)>0)
            <!-- give all notices using for loop -->
            @foreach($notices as $notice)
                <ul class="list-group">
                    <li class="list-group-item">{{$notice->sender}} : {{$notice->created_at}}</li>
                    <li class="list-group-item">Notice : <b>{{$notice->message}}</b></li>

                    <!-- add a form to delete each notice -->
                    {!! Form::open(['url'=>'deletenotice']) !!}
                    <input type="text" readonly name="message" value="{{$notice->message}}">

                    <!-- button for delete notices -->
                    <button type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span></button>
                    {!! Form::close() !!}
                    <!-- end of the form -->
                </ul>
                <hr>
            @endforeach
        @endif
</div>
<!-- end of view notices -->
    
<hr>
@endsection
<!-- end of sidebar -->

<!-- buttons -->
<!-- message button -->
<div class="navbar-header">
<a href="messages">
<img src="img/icon/message.png" width="200" height="120"></a>
</div>
<!-- staff registration button -->
<div class="navbar-header">
<a href="staffreg">
<img src="img/icon/regstaff.png" width="200" height="120"></a>
</div>
<!-- view staff details btn -->
<div class="navbar-header">
<a href="viewadminstaff">
<img src="img/icon/staff.png" width="200" height="120"></a>
</div>

<!-- manage customers button -->
<div class="navbar-header">
<a href="{{url('customersopp')}}">
<img src="img/icon/customer.png" width="200" height="120"></a>
</div>

<!-- group allocation btn -->
<div class="navbar-header">
<a href="{{url('groupallocate')}}">
<img src="img/icon/group.png" width="200" height="121"></a>
</div>

<hr>
@endsection
