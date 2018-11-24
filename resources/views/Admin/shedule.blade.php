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
<a href="/customersopp"><button class="btn btn-default">back to Manage Customers</button></a>
<div class="container">
<h1>shedules of NIC --><i> {{$val['nic']}}</i></h1>
<div class ="col-md-4 well">
<div >  <center>Add Item</center></div>
  <br>
  <form method="post" action= "{{url('/addschedule')}}" >

     {{csrf_field()}}

      <div class="form-group">
        <label for="type">NIC:</label>
        <input type="text" class="form-control" id="type" name ="nic1" value="{{$val['nic']}}">
      </div>

  <div class="form-group">
    <label for="type">Item Type:</label>
    <input type="text" class="form-control" id="type" name ="type1">
  </div>

  <div class="form-group">
    <label for="group">Item Group:</label>
    <input type="text" class="form-control" id="group" name = "group1">
  </div>


<div class="form-group">
    <label for="day">Day:</label>
  <select name="day1" >
  <option  value="Sunday">Sunday</option>
  <option  value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option  value="Wednesday">Wednesday</option>
  <option  value="Thursday">Thursday</option>
  <option  value="Friday">Friday</option>
  <option  value="Sataday">Sataday</option>
</select>
</div>

  <div class="form-group">
    <label for="time">Time:</label>
    <input type="time" class="form-control" id="time" name = "time1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <img src="/img/admin.png" width="50" height="50">

</div>
<div class ="col-md-8 well ">
  <div >  <center> View Shedule </center></div>

  <div class=" col-md-5 bg-danger " ><center><i><b>Sunday</b></i></center></div>
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
      @foreach($data1 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>



  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Monday</b></i></center></div>
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
      @foreach($data2 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Tuesday</b></i></center></div>
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
      @foreach($data3 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Wednesday</b></i></center></div>
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
      @foreach($data4 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Thursday</b></i></center></div>
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
      @foreach($data5 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Friday</b></i></center></div>
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
      @foreach($data6 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}" class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger  " ><center><i><b>Sataday</b></i></center></div>
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
      @foreach($data7 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>
        <td><a href="" class="btn btn-primary btn-block btn-info">Edit</a></td>
        <td><a href="{{url('/cus_delete_sch/'.$row1['id'].'/'.$row1['nic'])}}"class="btn btn-primary btn-block btn-danger">Remove</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>


</div>
</div>



@endsection
