<!-- include main layout -->
@extends('layouts.app')

@section('content')
<a href="/customersopp"><button class="btn btn-default">back to Manage Customers</button></a>
<!-- check if admin loggedin -->
<hr>
@if(isset(Auth::user()->username))

@else
    <script>window.location="/AdminLogin";</script>
@endif
@section('sidebar')

@endsection

<!-- buttons -->

<div class="container">
<b><h3>Shedules of NIC --><i> {{$val['nic']}}</i></h3><b><hr>
<div class ="col-md-4 well">
<div > <h3> <b><center>Add Item</center><b></h3></div>
  <br>
  <form method="post" action= "{{url('/addschedule')}}" >

     {{csrf_field()}}

      <div class="form-group">
        <label for="type">NIC:</label>
        <input type="text" class="form-control" id="type" name ="nic1" value="{{$val['nic']}}">
      </div>

  <div class="form-group">
    <label for="type">Item Type:</label>
    <select name="type1" class="form-control">
    <option  value="Leg_Press">Leg Press</option>
    <option  value="Leg_Extension">Leg Extension</option>
    <option value="Chest_Press">Chest Press</option>
    <option  value="Triceps_Press">Triceps Press</option>
    <option  value="Seated_Row">Seated Row</option>
    <option  value="Cable_Crossover">Cable Crossover</option>
    <option  value="Precor_Upright_Bike">Precor Upright Bike</option>
    <option  value="Precor_Crosstrainer_Elliptical">Precor Crosstrainer Elliptical</option>
    <option  value="Precor_Treadmill">Precor Treadmill</option>
    <option  value="Stairmaster_Step_Mill">Stairmaster Step Mill</option>
    <option  value="Smith_Machine">Smith Machine</option>
    <option  value="Olympic_Flat_Bench">Olympic Flat Bench</option>
    <option  value="Squat_Rack">Squat Rack</option>
    <option  value="Squat_Rack">Squat Rack</option>
  </select>

  </div>

  <div class="form-group">
    <label for="group">Item Group:</label>
    <select name="group1" class="form-control">
    <option  value="10-317.5-lbs">10-317.5 lbs</option>
    <option  value="10-257.5-lbs">10-257.5 lbs</option>
    <option value="5-75">5-75</option>
    <option  value="20-200-lbs">20-200 lbs</option>
    <option  value="14-programs,25-resistance-levels">14 programs, 25 resistance levels</option>
    <option  value="Up-to-12-m.p.h.&incline_15°">Up to 12 m.p.h. & incline 15°</option>
    <option  value="500g">500g</option>
    <option  value="1kg">1kg</option>
    <option  value="2kg">2kg</option>
    <option  value="5kg">5kg</option>
    <option  value="10kg">10kg</option>
    <option  value="20kg">20kg</option>
  </select>
  </div>


<div class="form-group">
    <label for="day">Day:</label>
  <select name="day1" class="form-control">
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
<br><br><br>



</div>
<div class ="col-md-8 well ">
  <div >  <h3><b><center> View Scheduls <button ><a href="{{url('/cus_print_sch/'.$val['nic'])}}" class="btn btn-primary btn-block btn-success">Print Scheduls</a></button></center></b></h3></div><hr>

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
