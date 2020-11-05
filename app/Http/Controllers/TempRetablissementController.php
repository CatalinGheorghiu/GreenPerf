<?php

namespace App\Http\Controllers;

use App\TempRetablissement;
use Illuminate\Http\Request;

class TempRetablissementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temps_retablissements.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TempRetablissement  $tempRetablissement
     * @return \Illuminate\Http\Response
     */
    public function show(TempRetablissement $tempRetablissement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TempRetablissement  $tempRetablissement
     * @return \Illuminate\Http\Response
     */
    public function edit(TempRetablissement $tempRetablissement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TempRetablissement  $tempRetablissement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TempRetablissement $tempRetablissement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TempRetablissement  $tempRetablissement
     * @return \Illuminate\Http\Response
     */
    public function destroy(TempRetablissement $tempRetablissement)
    {
        //
    }
}
