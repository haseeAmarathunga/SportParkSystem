<!-- staff profile -->
@extends('layouts.app')

@section('content')

<!-- check if any staff member is loggedin -->
@if(isset(Auth::user()->username))
@else
    <!-- if anyone not loggedin redirect to stff login page -->
    <script>window.location="/StaffLogin";</script>
@endif

<!-- view the staff meber profile with all the details -->
@if(isset(Auth::user()->username))

    @section('sidebar')
    <div class="alert alert-warning"><h3>
    <span class="glyphicon glyphicon-envelope"></span> Messages</h3>
    @if(count($inbox)>0)
        @foreach($inbox as $inb)
            @if($inb->reciever==Auth::user()->username)
            <hr>
                <ul class="list-group">
                    <li class="list-group-item">{{$inb->sender}} : <b>{{$inb->message}}</b></li>
                    <!-- <a href="/staffupdate"><b>Edit <span class="glyphicon glyphicon-edit"></span></b></a></li>
                    -->

                </ul>
                <!-- form for reply to messages -->
                {!! Form::open(['url'=>'/messagereply']) !!}
                <input type="text" name="sender" id="sender" readonly
                value={{$inb->reciever}}>
                <input type="text" name="reciever" id="reciever" readonly
                value={{$inb->sender}}>

                <input type="textarea" class="form-control" name="message" 
                id="message" placeholder="Enter Reply..." required>
                <button class="btn btn-warning"type="submit">Reply <span class="glyphicon glyphicon-send"></span></button>
                
                {!! Form::close() !!}       
                
            @endif
            
        @endforeach

    @endif
    </div>
    @endsection
@else
<script>window.location="/StaffLogin";</script>
@endif
<div>
<a href="/staffs"><button class="btn btn-default">back</button></a></div><hr>
<h3><span class="glyphicon glyphicon-envelope"></span> Send Messages</h3>
<hr>
<!-- form for send new messages -->
{!! Form::open(['url'=>'/newmessagestaff']) !!}
<div class="form-group">
    {{Form::label('sender','Sender')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input type="text" class="form-control" name="sender" id="sender" placeholder="sender"readonly value={{$inb->reciever}}>
</div></div>
<div class="form-group">
   {{Form::label('reciever','Reciever')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <!-- reciever text field -->
    <input type="text" class="form-control" name="reciever" id="reciever" placeholder="Reciever">
</div></div>

<div class="form-group">
   {{Form::label('message','Message')}}
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
    <!-- message textarea field -->
    <input type="textarea" class="form-control" name="message" id="message" placeholder="Enter Message">
</div></div>

<button class="btn btn-success"type="submit">Send <span class="glyphicon glyphicon-send"></span></button>
                
{!! Form::close() !!}



@endsection