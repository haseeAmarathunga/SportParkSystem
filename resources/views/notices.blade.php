<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if any customer is loggedin -->
@if(isset(Auth::user()->username))
@else
    <script>window.location="/home";</script>
@endif


<!-- show the profile details in sidebar -->

@section('sidebar')
<a href="/customers"><button class="btn btn-default">back</button></a>
<hr>
@if(isset(Auth::user()->username))
    <h3><span class="glyphicon glyphicon-envelope"></span> Announcements!</h3>
    <hr>   
        <!-- get all notices for view -->
        @if(count($notices)>0)
            @foreach($notices as $notice)
                <ul class="list-group">
                    <li class="list-group-item">{{$notice->sender}} : {{$notice->created_at}}</li>
                    <li class="list-group-item">Notice : <b>{{$notice->message}}</b></li>
                    
                </ul>
                <hr>
            @endforeach

        @endif
        <hr>
@endif
@endsection

<img src="img/d.jpg">
@endsection
