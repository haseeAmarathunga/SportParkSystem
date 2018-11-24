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
    <label for="type">Item Type:</label>
    <input type="text" class="form-control" id="type" name ="type">
  </div>

  <div class="form-group">
    <label for="group">Item Group:</label>
    <input type="text" class="form-control" id="group" name = "group">
  </div>

  <div class="form-group">
    <label for="day">Day:</label>
    <input type="date" class="form-control" id="day" name = "day">
  </div>

  <div class="form-group">
    <label for="time">Time:</label>
    <input type="time" class="form-control" id="time" name = "time">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <img src="/img/admin.png" width="50" height="50">

</div>
<div class ="col-md-8 well ">
  <div >  <center> View Shedule </center></div>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Sunday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Monday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Tuesday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Wednesday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Thursday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Friday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>

  <div class=" col-md-5 bg-success text-white " ><center><i><b>Sataday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>
        <th>Edit </th>
        <th>Remove </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
    </tbody>
  </table>


</div>
</div>



@endsection
