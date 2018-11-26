<!-- include main layout -->
@extends('layouts.app')

@section('content')

<a href="/customersopp"><button class="btn btn-default">back to Manage Customers</button></a>

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
<h1>payment</h1>
 <form method="post" action= "{{url('/pay')}}" >

   {{csrf_field()}}


<div  class=" col-md-12 form-group">
  <label for="type">NIC:</label>
  <input type="text" class="form-control" id="type" name ="nic" value ={{$nic}} >
</div>

<div class="col-md-12 form-group">
  <label for="group">Types :</label>
  <select name="day1" class="form-control">
  <option  value="January">Schedules(Exercices)</option>
  <option  value="February">Sport classes(Badminton)</option>
  <option  value="February">Sport classes(Karate)</option>
  <option  value="February"> Zumba</option>

</select>
</div>

<div class="col-md-12 form-group">
    <label for="day">Payment For Month :</label>
  <select name="day1" class="form-control">
  <option  value="January">January</option>
  <option  value="February">February</option>
  <option value="March">March</option>
  <option  value="April">April</option>
  <option  value="May">May</option>
  <option  value="June">June</option>
  <option  value="July">July</option>
  <option  value="August"></option>
  <option  value="September"></option>
  <option  value="October"></option>
  <option  value="November"></option>
  <option  value="December"></option>
</select>
</div>

  <div class="col-md-12 form-group">
  <label for="group">Date :</label>
  <input type="date" class="form-control" id="groupbf" name = "group" value =>
</div>

  <div class="col-md-12 form-group">
  <label for="group">Total Fee:</label>
  <input type="text" class="form-control" id="groupbf" name = "gt" value = >
</div>




<div class="col-md-12 form-group"><div class ="col-md-6"></div>
    <button type="submit" class="btn btn-primary"> ...Pay & Bill... </button>
</div>


</form>

</div>



@endsection
