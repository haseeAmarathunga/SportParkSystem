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

     ###################INVOICE#######################INVOICE################INVOICE###########
       ###################INVOICE#######################INVOICE################INVOICE###########
       <br>
     <h3 align="center"><b>BLUE FEATHER SPORT PARK</b></h3>
     ###################INVOICE#######################INVOICE################INVOICE###########
       ###################INVOICE#######################INVOICE################INVOICE###########
     <br><br><br><br>
      BILL NUMBER >>> <b> '.$id.' </b>
      <br>
      CUSTOMER NIC >>> <b> '.$nic.' </b>.....................................................................DATE >> <b>'.$date.'</b><br><br><br>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
    <th style="border: 1px solid; padding:12px;" width="30%">PAYMENT FOR MONTH</th>
    <th style="border: 1px solid; padding:12px;" width="15%">TOTAL FEE</th>

   </tr>
     ';

      $output .= '
      <tr>

       <td style="border: 1px solid; padding:12px;">'.$type.'</td>
       <td style="border: 1px solid; padding:12px;">'.$pfm.'</td>
       <td style="border: 1px solid; padding:12px;">RS '.$fee.' /=</td>
      </tr>
      ';

     $output .= '</table><br>';

     $output .= '<br><br><center><h1>$$ PAIED $$</h1></center><br>Signature -: .....................................';
       $output .= '  <h4><center>===============================THANK YOU====================================</center> </h4>';
            $output .= ' <br> Address - No 16/1,<br> 1st Lane ,<br>Bandaranayake Mw Katubedda,<br> Moratuwa.<br>Tele - +(94) 11 254 152 ';
     return $output;
    }
}
