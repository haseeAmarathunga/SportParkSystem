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


@endsection