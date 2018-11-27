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


<h1>payment</h1>
<div class = 'col-md-7'>
 <form method="post" action= "{{url('/pay')}}" >

   {{csrf_field()}}


<div  class=" col-md-12 form-group">
  <label for="type">NIC:</label>
  <input type="text" class="form-control" id="type" name ="nic" value ={{$nic}} >
</div>

<div class="col-md-12 form-group">
  <label for="group">Types :</label>
  <select name="type" class="form-control">
  <option  value="Schedules(Exercices)">Schedules(Exercices)</option>
  <option  value="Sport classes(Badminton)">Sport classes(Badminton)</option>
  <option  value="Sport classes(Karate)">Sport classes(Karate)</option>
  <option  value="Zumba"> Zumba</option>

</select>
</div>

<div class="col-md-12 form-group">
    <label for="day">Payment For Month :</label>
  <select name="pfm" class="form-control">
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
  <input type="date" class="form-control" id="groupbf" name = "date" value =>
</div>

  <div class="col-md-12 form-group">
  <label for="group">Total Fee:</label>
  <input type="text" class="form-control" id="groupbf" name = "fee" value = >
</div>




<div class="col-md-12 form-group"><div class ="col-md-6"></div>
    <button type="submit" class="btn btn-primary"> ...Pay & Bill... </button>
</div>


</form>
</div>
<div class ="col-md-5">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Bill No </th>
        <th>Date</th>
        <th>Type </th>
        <th>Print Bill </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $row1)
      <tr>
        <td>{{$row1['id']}}</td>
        <td>{{$row1['data']}}</td>
        <td>{{$row1['type']}}</td>
        <td><a href="{{url('/print_bill/'.$row1['id'].'/'.$row1['nic'].'/'.$row1['type'].'/'.$row1['pfm'].'/'.$row1['date'].'/'.$row1['fee'])}}" class="btn btn-primary btn-block btn-danger">Print</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>
</div>
</div>



@endsection
