<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maendeleo;
use Auth;

class MaendeleoController extends Controller
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
        return view('maendeleo.maendeleo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dhamana = implode(', ',$request->input('collateral'));

        $maendeleo = new Maendeleo();
        $maendeleo->amount_in_words = $request->input('amount_in_words');
        $maendeleo->amount_in_figures = $request->input('amount_in_figures');
        $maendeleo->months = $request->input('months');
        $maendeleo->phase = $request->input('phase');
        $maendeleo->total = $request->input('total');
        $maendeleo->purpose = $request->input('purpose');
        $maendeleo->collateral = $dhamana;
        $maendeleo->creditor = $request->input('creditor');
        $maendeleo->creditor_Address = $request->input('creditor_Address');
        $maendeleo->creditor_amount = $request->input('creditor_amount');
        $maendeleo->mdhamini1 = $request->input('mdhamini1');
        $maendeleo->mdhamini2 = $request->input('mdhamini2');
        $maendeleo->user_id = Auth::user()->id;

        $maendeleo->save();
        return redirect()->back()->with('status','Application submittted succesfull');
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
