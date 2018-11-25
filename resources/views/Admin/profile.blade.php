<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
<a href="/customersopp"><button class="btn btn-default">back to manage customer</button></a>
<hr>
@if(isset(Auth::user()->username))
@else
    <script>window.location="/AdminLogin";</script>
@endif
@section('sidebar')

@endsection

<!-- buttons -->

<div>

@if(count($customers)>0)
    @foreach($customers as $customer)
      <h3><span class="glyphicon glyphicon-user"></span> View Profile</h3>
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

    @endforeach

@endif
</div>



@endsection
