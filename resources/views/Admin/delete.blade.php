<!-- include main layout -->
@extends('layouts.app')

@section('content')
<a href="/customersopp"><button class="btn btn-default">back to Manage Customers</button></a>
<hr>
<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))

@else
    <script>window.location="/AdminLogin";</script>
@endif
@section('sidebar')
<div class="well">
</div>
@endsection

<!-- buttons -->

<div>
<h1>delete</h1>
</div>



@endsection
