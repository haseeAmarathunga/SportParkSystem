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
<h1>Recode</h1>
<div class="container">
  <table class="table table-striped">
       <tr>
          <th>Type</th>
          <th>Group </th>
          <th>Time</th>
          <th>Data</th>

      </tr>
        @foreach($attendence as $row)
          <tr>
            <td>{{$row['type']}}</td>
            <td>{{$row['group']}}</td>
            <td>{{$row['time']}}</td>
            <td>{{$row['date']}}</td>
                </tr>
        @endforeach

  </table>
</div>
</div>



@endsection
