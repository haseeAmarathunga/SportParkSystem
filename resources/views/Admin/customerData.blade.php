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
                      
                                </table>
</div>



@endsection
