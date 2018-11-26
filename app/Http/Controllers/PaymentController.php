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

    function pdf($id,$nic,$type,$pfm,$date,$fee)
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html($id,$nic,$type,$pfm,$date,$fee));
     return $pdf->stream();
    }

    function convert_customer_data_to_html($id,$nic,$type,$pfm,$date,$fee)
    {
     //$customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Address</th>
    <th style="border: 1px solid; padding:12px;" width="15%">City</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Postal Code</th>
    <th style="border: 1px solid; padding:12px;" width="20%">Country</th>
   </tr>
     ';

      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$nic.'</td>
       <td style="border: 1px solid; padding:12px;">'.$type.'</td>
       <td style="border: 1px solid; padding:12px;">'.$pfm.'</td>
       <td style="border: 1px solid; padding:12px;">'.$date.'</td>
      </tr>
      ';

     $output .= '</table>';
     return $output;
    }
}
