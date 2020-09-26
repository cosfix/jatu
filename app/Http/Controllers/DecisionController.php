<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commitee;
class DecisionController extends Controller
{
    public function index()
    {
        
    }




    public function create()
    {
        return view('admin.uamuzi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        // $this->validate($request, [
        //     'interest'             => 'required',
        //     'description'               => 'required',
        //     'status'     => 'required',
        //     'chair'    => 'required',
        //     'secretary'          => 'required',
        //     'messenger'           => 'required',
        //     'loan_officer'              => 'required',
        //     'receive_date'         =>'required',
        //     'start_day'       => 'required',
        //     'end_day'             => 'required',
        //     'month_interest'             => 'required',
        // ]);
         $data = new Commitee();
         $data->interest =$request->interest;
         $data->description = $request->description;
         $data->status = $request->status;
         $data->chair = $request->chair;
         $data->secretary = $request->secretary;
         $data->messenger= $request->messenger;
         $data->loan_officer = $request->loan_officer;
         $data->receive_date = $request->receive_date;
         $data->start_day= $request->start_day;
         $data->end_day = $request->end_day;
         $data->month_interest = $request->month_interest;

       
        $data->save();
        
        return redirect()->back(); 
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
