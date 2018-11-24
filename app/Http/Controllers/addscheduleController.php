<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Scheduls;
class addscheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    /*  $data1 = Schedulsr::all()->toArray();
      return view('Admin.shedule', compact('data1'));*/

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
      $this->validate($request, [ 'type1' =>  'required', 'group1' =>  'required', 'day1' =>  'required', 'time1' =>  'required']);
                                  $student = new Scheduls([
                                    'type'    =>  $request->get('type1'),
                                    'group'     =>  $request->get('group1'),
                                    'day'     =>  $request->get('day1'),
                                    'time'     =>  $request->get('time1'),
                                    'nic'     =>  $request->get('nic1'),
                                        // =>  $nic1
                                  ]);
                                   $student->save();
                                   $val['nic']=$request->get('nic1');
                                   //Sunday
                                   $data1 = Scheduls::select('nic','id','type','group','day','time')
                                                     ->where([['day', '=', "Sunday"] , ['nic' ,'=',$request->get('nic1')]])
                                                     ->paginate(100);
                                  //Monday
                                  $data2 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Monday"] , ['nic' ,'=',$request->get('nic1')]])
                                                        ->paginate(100);

                                  //Tuesday
                                  $data3 = Scheduls::select('nic','id','type','group','day','time')
                                                          ->where([['day', '=', "Tuesday"] , ['nic' ,'=',$request->get('nic1')]])
                                                            ->paginate(100);
                                  //Wednesday
                                  $data4 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Wednesday"] , ['nic' ,'=',$request->get('nic1')]])
                                                        ->paginate(100);
                                  //Thursday
                                  $data5 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Thursday"] , ['nic' ,'=',$request->get('nic1')]])
                                                        ->paginate(100);
                                //Friday
                                  $data6 = Scheduls::select('nic','id','type','group','day','time')
                                                        ->where([['day', '=', "Friday"] , ['nic' ,'=',$request->get('nic1')]])
                                                        ->paginate(100);
                                //Sataday
                                 $data7 = Scheduls::select('nic','id','type','group','day','time')
                                                      ->where([['day', '=', "Sataday"] , ['nic' ,'=',$request->get('nic1')]])
                                                      ->paginate(100);
        return view('Admin.shedule',compact('val','data1','data2','data3','data4','data5','data6','data7'));



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
    public function destroy($id,$nic)
    {
         $student = Scheduls::find($id);
         $student->delete();
         return redirect("/cus_shedule/$nic");
    }
}
