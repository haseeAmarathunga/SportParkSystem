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
<h1> Mark Attendence</h1>
<div class =" well">
<div >  <center>Add Item</center></div>
  <br>
  <form method="post" action= "{{url('/addschedule')}}" >

     {{csrf_field()}}


  <div  class=" col-md-6 form-group">
    <label for="type">NIC:</label>
    <input type="text" class="form-control" id="type" name ="nic" value ="{{$row1}}">
  </div>

  <div class="col-md-6 form-group">
    <label for="group">Type:</label>
    <input type="text" class="form-control" id="group" name = "type" value = "{{$row3}}">
  </div>

    <div class="col-md-6 form-group">
    <label for="group">Item Group:</label>
    <input type="text" class="form-control" id="groupbf" name = "group" value = "{{$row4}}">
  </div>

    <div class="col-md-6 form-group">
    <label for="group">Given Time:</label>
    <input type="text" class="form-control" id="groupbf" name = "gt" value = "{{$row6}}">
  </div>



  <div class="col-md-8 form-group">
    <label for="group">Item Group:</label>
    <input type="time" class="form-control" id="grofupbf" name = "time" >
  </div>

  <div class="col-md-4 form-group">

  </div>

    <div class="col-md-8 form-group">
    <label for="group">Date:</label>
    <input type="date" class="form-control" id="groupgbf" name = "date" >
  </div>
  <div class="col-md-4 form-group">
      <button type="submit" class="btn btn-primary">.... Mark ....</button>
  </div>


</form>

  <img src="/img/admin.png" width="50" height="50">

</div>
</div>



@endsection
