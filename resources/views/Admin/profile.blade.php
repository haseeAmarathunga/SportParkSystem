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
<div class="well">
</div>
@endsection

<!-- buttons -->

<div>
<h1>profile</h1>

@if(count($customers)>0)
    @foreach($customers as $customer)

        <div class="alert alert-info"><h3><center>
        <a href="/customers"><span class="glyphicon glyphicon-user"></span> View Profile</h3></a>
        <hr>
        <h4>Bio details : </h4><br/>
            <ul class="list-group">
                <li class="list-group-item">FirstName : <b>{{$customer->firstname}}</b></li>
                <li class="list-group-item">LastName : <b>{{$customer->lastname}}</b></li>
                <li class="list-group-item">NIC : <b>{{$customer->nic}}</b></li>
                <li class="list-group-item">Email : <b>{{$customer->email}}</b></li>
                <li class="list-group-item">Address : <b>{{$customer->address}}</b></li>
                <li class="list-group-item">MobileNo : <b>{{$customer->mobile}}</b></li>
                <li class="list-group-item">

                <hr>


            </ul>
          </center>
          </div>

    @endforeach

@endif
</div>



@endsection
