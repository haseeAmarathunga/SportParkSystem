<?php

namespace App\Http\Controllers;
use App\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
      $this->validate($request, [ 'type' =>  'required', 'type' =>  'required', 'pfm'  =>  'required', 'date' =>  'required' ,'fee' =>  'required']);
                                  $student = new payment([
                                    'nic'    =>  $request->get('nic'),
                                    'type'     =>  $request->get('type'),
                                    'pfm'     =>  $request->get('pfm'),
                                    'date'     =>  $request->get('date'),
                                    'fee'     =>  $request->get('fee'),
                                        // =>  $nic1
                                  ]);
                                   $student->save();
                                   return redirect('/cus_payment/'.$request->get('nic'))->with('success','Payment is success ...!');

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
