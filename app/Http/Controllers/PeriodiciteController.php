<?php

namespace App\Http\Controllers;

use App\Periodicite;
use Illuminate\Http\Request;

class PeriodiciteController extends Controller
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
        return view('periodicites.index');
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
     * @param  \App\Periodicite  $periodicite
     * @return \Illuminate\Http\Response
     */
    public function show(Periodicite $periodicite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Periodicite  $periodicite
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodicite $periodicite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Periodicite  $periodicite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodicite $periodicite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Periodicite  $periodicite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodicite $periodicite)
    {
        //
    }
}
