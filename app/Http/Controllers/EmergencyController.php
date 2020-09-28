<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emergency;
class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Emergency::get(); 
        return view('page.dharuraview',compact('loans') );
    }
    public function index2()
    {
        $loans = Emergency::get(); 
        return view('admin.memberview',compact('loans') );
    }
    public function index3()
    {
        $loans = Emergency::get(); 
        return view('page.dharuraview',compact('loans') );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.dharura');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'saving'             => 'required',
            'bond'               => 'required',
            'successor_name'     => 'required',
            'successor_phone'    => 'required',
            'member_id'          => 'required',
            'business'           => 'required',
            'place'              => 'required',
            'day_income'         =>'required',
            'month_income'       => 'required',
            'amount'             => 'required',
            'reason'             => 'required',
            'month_payment'      => 'required',
            'payment_phase'       => 'required',
        ]);
        $loan1 = new Emergency([ 
            'saving' => $request->get('saving'),
            'bond' => $request->get('bond'),
            'successor_name' => $request->get('successor_name'),
            'successor_phone' => $request->get('successor_phone'),
            'member_id' => $request->get('member_id'),
            'business' => $request->get('business'),
            'place' => $request->get('place'),
            'day_income' => $request->get('day_income'),
            'month_income' => $request->get('month_income'),
            'amount' => $request->get('amount'),
            'reason' => $request->get('reason'),
            'month_payment' => $request->get('month_payment'),
            'payment_phase' => $request->get('payment_phase'),

        ]);
        $loan1->save();
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
