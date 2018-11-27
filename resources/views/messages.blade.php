<!-- include main layout -->

@extends('layouts.app')
@section('content')
@if(isset(Auth::user()->username))

<a href="/adminmenu"><button class="btn btn-default">back</button></a><hr>


<h3>Messages</h3>

<!-- show all the messages from forum -->

@if(count($messages)>0)
    @foreach($messages as $message)
        <ul class="list-group">
            <li class="list-group-item">Name : {{$message->name}}</li>
            <li class="list-group-item">Email : {{$message->email}}</li>
            <li class="list-group-item">Message : {{$message->message}}</li>
            <div class="well">
            <form>
            <input type="textarea" class="form-control" name='reply' 
            placeholder="Ente reply message">
            <a href=""><button class="btn btn-primary">Reply</button></a>
            </div>
        </ul>
    @endforeach

@endif

@endsection

@section('sidebar')
@parent
<p>This is a pharagraph.</p>
@endsection

@else
    <script>window.location="/AdminLogin";</script>
@endif