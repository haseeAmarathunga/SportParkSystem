<!-- include main layout -->

@extends('layouts.app')
@section('content')
@if(isset(Auth::user()->username))

<a href="/adminmenu"><button class="btn btn-default">back</button></a><hr>


<h3>Forum Messages</h3>

<!-- show all the messages from forum -->

@if(count($messages)>0)
    @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">Name : {{$message->name}}</li>
            <li class="list-group-item">Email : {{$message->email}}</li>
            <li class="list-group-item">Message : {{$message->message}}</li>
            <div class="well">
            {!! Form::open(['url'=>'/sendemail']) !!}
            To:<input type="text" name="email" readonly value="{{$message->email}}">
            <b><input type="text" name="name" readonly value="{{$message->name}}"></b>
            
            <input type="textarea" class="form-control" name='reply' 
            placeholder="Enter reply message">
            
            <button id="submit" class="btn btn-warning">Reply</button>
            {!! Form::close() !!}
            </div>
        </ul>
    @endforeach

@endif

@endsection

@section('sidebar')
<hr>
<img src="img/1.jpg">
@parent
@endsection

@else
    <script>window.location="/AdminLogin";</script>
@endif