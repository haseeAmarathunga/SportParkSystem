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
  <table class="table table-bordered table-striped">
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
            <td><a href="" class="btn btn-primary btn-block ">Profile</a></td>
              <td><a href="" class="btn btn-primary btn-block ">Mark</a></td>
              <td><a href="" class="btn btn-primary btn-block ">View & Create</a></td>
            <td><a href="" class="btn btn-primary btn-block ">pay</a></td>
            <td><a href="" class="btn btn-primary btn-block ">Delete</a></td>
              <td></td>    </tr>
                 @endforeach

  </table>
</div>



@endsection
