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

<div class="container">
<h1>shedules</h1>
<div class ="col-md-4 well">
<div >  <center>Add Item</center></div>
  <br>
  <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Item Type:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="email">Item Group:</label>
    <input type="email" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="email">Day:</label>
    <input type="date" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="email">Time:</label>
    <input type="time" class="form-control" id="email">
  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class ="col-md-8 well ">
  <div >  <center> View Shedule </center></div>
  <div class=" col-md-5 bg-success text-white " ><center><i><b>Sunday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>
</div>



@endsection
