<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mark;
use App\Scheduls;
class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function senddata($row1,$row2,$row3,$row4,$row5,$row6){
      //'nic','id','type','group','day','time'

      return view('Admin.mark',compact('row1','row2','row3','row4','row5','row6'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [ 'type' =>  'required', 'group' =>  'required', 'date' =>  'required', 'time' =>  'required' ,'nic' =>  'required']);
                                  $student = new mark([
                                    'nic'    =>  $request->get('nic'),
                                    'type'     =>  $request->get('type'),
                                    'group'     =>  $request->get('group'),
                                    'time'     =>  $request->get('time'),
                                    'date'     =>  $request->get('date'),
                                        // =>  $nic1
                                  ]);
                                   $student->save();

                                   $val['nic']=$request->get('nic');
                                   //Sunday
                                   $data1 = Scheduls::select('nic','id','type','group','day','time')
                                                     ->where([['day', '=', "Sunday"] , ['nic' ,'=',$val['nic']]])
                                                     ->paginate(100);
                                  //Monday
                                  $data2 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Monday"] , ['nic' ,'=',$val['nic']]])
                                                        ->paginate(100);

                                  //Tuesday
                                  $data3 = Scheduls::select('nic','id','type','group','day','time')
                                                          ->where([['day', '=', "Tuesday"] , ['nic' ,'=',$val['nic']]])
                                                            ->paginate(100);
                                  //Wednesday
                                  $data4 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Wednesday"] , ['nic' ,'=',$val['nic']]])
                                                        ->paginate(100);
                                  //Thursday
                                  $data5 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Thursday"] , ['nic' ,'=',$val['nic']]])
                                                        ->paginate(100);
                                //Friday
                                  $data6 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Friday"] , ['nic' ,'=',$val['nic']]])
                                                        ->paginate(100);
                                //Sataday
                                 $data7 = Scheduls::select('nic','id','type','group','day','time')
                                                      ->where([['day', '=', "Sataday"] , ['nic' ,'=',$val['nic']]])
                                                      ->paginate(100);

                                 return view('Admin.attendence',compact('val','data1','data2','data3','data4','data5','data6','data7'));

    }


    public function viewAttendence($nic){
      $attendence = mark::select('type','group','time','date')
                        ->where('nic' ,'=',$nic)
                        ->paginate(100);
      return view('Admin.viewAttendencedata',compact('attendence'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
