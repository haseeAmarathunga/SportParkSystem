@extends('layouts.app')

@section('content')

@if(isset(Auth::user()->username))
    <div class="alert alert-success success-block">
        <strong>Welcome {{Auth::user()->username}}</strong>
        <br/>
        <a href="{{url('/logout')}}">Logout</a>
    </div>
@else
    <script>window.location="/StaffLogin";</script>
@endif

@endsection