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
                                   return view('Admin.shedule',compact('val'));

                                //  return redirect()->route('Admin.shedule')->with('success', 'Data Added');

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
