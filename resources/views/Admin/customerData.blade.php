<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
    <!-- <div class="alert alert-success success-block">
        <strong>Welcome Admin</strong>
        <br/>
        <a href="{{url('AdminLogin/logout')}}">Logout</a>
    </div> -->
@else
    <script>window.location="/AdminLogin";</script>
@endif
<hr>
<a href="/adminmenu"><button class="btn btn-default">back</button></a>
<center><h2>Manage Customers</h2></center>
<hr>
<!-- buttons -->

<div class="container">
  <table class="table table-striped">
       <tr>
          <th>Customer NIC</th>
          <th>Username </th>
          <th>View Profile</th>
          <th>Mark Attendence</th>
          <th>Shedule</th>
          <th>payment</th>
          <th>Remove Customer</th>
      </tr>
        @foreach($data as $row)
          <tr>
            <td>{{$row['nic']}}</td>
            <td>{{$row['firstname']}}</td>
            <td><a href="{{url('cus_profile',$row['nic'])}}" class="btn btn-primary btn-block ">Profile</a></td>
            <td><a href="{{url('cus_attendence',$row['nic'])}}" class="btn btn-primary btn-block ">Mark</a></td>
            <td><a href="{{url('cus_shedule',$row['nic'])}}" class="btn btn-primary btn-block btn-warning ">View & Create</a></td>
            <td><a href="{{url('cus_payment',$row['nic'])}}" class="btn btn-primary btn-block btn-info">pay</a></td>
            <td><a href="{{url('cus_delete')}}" class="btn btn-primary btn-block btn-danger ">Delete</a></td>
            <td></td>    </tr>
        @endforeach

  </table>
</div>
<hr>


@endsection
