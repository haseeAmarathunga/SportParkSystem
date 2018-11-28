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
    //Route::get('cus_print_sch/{$data1}/{$data2}/{$data3}/{$data4}/{$data5}/{$data6}/{$data7}','AdimnSideCustomerController@printsche');
    function printsche($nic)
    {
      $val['nic']=$nic;
      //Sunday
      $data1 = Scheduls::select('nic','id','type','group','day','time')
                        ->where([['day', '=', "Sunday"] , ['nic' ,'=',$nic]])
                        ->paginate(100);
     //Monday
     $data2 = Scheduls::select('nic','id','type','group','day','time')
                           ->where([['day', '=', "Monday"] , ['nic' ,'=',$nic]])
                           ->paginate(100);

     //Tuesday
     $data3 = Scheduls::select('nic','id','type','group','day','time')
                             ->where([['day', '=', "Tuesday"] , ['nic' ,'=',$nic]])
                               ->paginate(100);
     //Wednesday
     $data4 = Scheduls::select('nic','id','type','group','day','time')
                           ->where([['day', '=', "Wednesday"] , ['nic' ,'=',$nic]])
                           ->paginate(100);
     //Thursday
     $data5 = Scheduls::select('nic','id','type','group','day','time')
                           ->where([['day', '=', "Thursday"] , ['nic' ,'=',$nic]])
                           ->paginate(100);
   //Friday
     $data6 = Scheduls::select('nic','id','type','group','day','time')
                           ->where([['day', '=', "Friday"] , ['nic' ,'=',$nic]])
                           ->paginate(100);
   //Sataday
    $data7 = Scheduls::select('nic','id','type','group','day','time')
                         ->where([['day', '=', "Sataday"] , ['nic' ,'=',$nic]])
                         ->paginate(100);

         $pdf = \App::make('dompdf.wrapper');
         $pdf->loadHTML($this->convert_customer_data_to_html($data1,$data2,$data3,$data4,$data5,$data6,$data7,$nic));
         return $pdf->stream();
    }

    function convert_customer_data_to_html($data1,$data2,$data3,$data4,$data5,$data6,$data7,$nic)
    {
     //$customer_data = $this->get_customer_data();
     $output = '

     ###################Scheduls######################Scheduls#############Scheduls###########
       ###################Scheduls######################Scheduls##############Scheduls##########
       <br>
     <h3 align="center"><b>BLUE FEATHER SPORT PARK</b></h3>
     ########################Scheduls###################Scheduls################Scheduls###########
       ###################Scheduls#####################Scheduls################Scheduls##########
     <br><br><br><br>

      CUSTOMER NIC >>> <b> '.$nic.'___________________________ VALIRD UNTIL : ................................ </b></b><br><br><br>
      <center><b>Sunday</b></center>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
    <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
    <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

   </tr>
     ';

       foreach($data1 as $customer)
      {
       $output .= '
       <tr>
        <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
        <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
       </tr>
       ';
      }
      $output .= '</table><br>';

      $output.= '   <center><b>Monday</b></center>
       <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
      <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
      <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
      <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

     </tr>
       ';

         foreach($data2 as $customer)
        {
         $output .= '
         <tr>
          <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
          <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
          <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
         </tr>
         ';
        }
        $output .= '</table><br>';

        $output.= '   <center><b>Tuesday</b></center>
         <table width="100%" style="border-collapse: collapse; border: 0px;">
          <tr>
        <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
        <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
        <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

       </tr>
         ';

           foreach($data3 as $customer)
          {
           $output .= '
           <tr>
            <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
            <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
            <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
           </tr>
           ';
          }
          $output .= '</table><br>';

          $output.= '   <center><b>Wednesday</b></center>
           <table width="100%" style="border-collapse: collapse; border: 0px;">
            <tr>
          <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
          <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
          <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

         </tr>
           ';

             foreach($data4 as $customer)
            {
             $output .= '
             <tr>
              <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
              <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
              <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
             </tr>
             ';
            }
            $output .= '</table><br>';

            $output.= '   <center><b>Thursday</b></center>
             <table width="100%" style="border-collapse: collapse; border: 0px;">
              <tr>
            <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
            <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
            <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

           </tr>
             ';

               foreach($data5 as $customer)
              {
               $output .= '
               <tr>
                <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
                <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
               </tr>
               ';
              }
              $output .= '</table><br>';

              $output.= '   <center><b>Friday</b></center>
               <table width="100%" style="border-collapse: collapse; border: 0px;">
                <tr>
              <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
              <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
              <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

             </tr>
               ';

                 foreach($data6 as $customer)
                {
                 $output .= '
                 <tr>
                  <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
                  <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
                  <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
                 </tr>
                 ';
                }
                $output .= '</table><br>';

                $output.= '   <center><b>Sataday</b></center>
                 <table width="100%" style="border-collapse: collapse; border: 0px;">
                  <tr>
                <th style="border: 1px solid; padding:12px;" width="20%">TYPE</th>
                <th style="border: 1px solid; padding:12px;" width="30%">GROUP</th>
                <th style="border: 1px solid; padding:12px;" width="15%">TIME</th>

               </tr>
                 ';

                   foreach($data7 as $customer)
                  {
                   $output .= '
                   <tr>
                    <td style="border: 1px solid; padding:12px;">'.$customer->type.'</td>
                    <td style="border: 1px solid; padding:12px;">'.$customer->group.'</td>
                    <td style="border: 1px solid; padding:12px;">'.$customer->time.'</td>
                   </tr>
                   ';
                  }
                  $output .= '</table><br>';



     $output .= '<br>Signature -: .....................................';
       $output .= '  <h4><center>===============================THANK YOU====================================</center> </h4>';
            $output .= ' <br> Address - No 16/1,<br> 1st Lane ,<br>Bandaranayake Mw Katubedda,<br> Moratuwa.<br>Tele - +(94) 11 254 152 ';


     return $output;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
