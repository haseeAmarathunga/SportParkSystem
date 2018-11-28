<!-- include main layout -->
@extends('layouts.app')

@section('content')

<!-- check if admin loggedin -->
@if(isset(Auth::user()->username))
@else
    <script>window.location="/AdminLogin";</script>
@endif
<a href="/customersopp"><button class="btn btn-default">back to Manage Customers</button></a>
<hr>
@section('sidebar')
<div class="well">
</div>
@endsection

<!-- buttons -->

<div>



<div class="container">
  <nav class="navbar ">
    <ul class="nav navbar-nav">


    </ul>
    <div class="col-sm-4"></div>

      <div >
        <a class="btn btn-default" href="{{url('/cus_mark_sch/'.$val['nic'])}}"> Search Attendence</a>
      </div>



</nav>


<center><h3>Shedules of NIC --><i> {{$val['nic']}}</i></h3></center>
<div class ="col-md-1"></div>
<div class ="col-md-10 well ">
  <div >  <center> View Shedule </center></div>

  <div class=" col-md-5 bg-danger " ><center><i><b>Sunday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data1 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>



  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Monday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data2 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Tuesday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data3 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Wednesday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data4 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

      <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Thursday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data5 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger " ><center><i><b>Friday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data6 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <div class=" col-md-5 col-md-5 bg-danger  " ><center><i><b>Sataday</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <div class=" col-md-5 bg-danger " ><center><i><b>.</b></i></center></div>
  <div class=" col-md-7 bg-success text-white " >.</div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Type</th>
        <th>Item Group</th>
        <th>Itme </th>

        <th>Mark </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data7 as $row1)
      <tr>
        <td>{{$row1['type']}}</td>
        <td>{{$row1['group']}}</td>
        <td>{{$row1['time']}}</td>

        <td><a href="{{url('/cus_mark_sch/'.$row1['nic'].'/'.$row1['id'].'/'.$row1['type'].'/'.$row1['group'].'/'.$row1['day'].'/'.$row1['time'])}}" class="btn btn-primary btn-block btn-danger">Mark</a></td>
      </tr>
     @endforeach
    </tbody>
  </table>


</div>
</div>
</div>



@endsection
