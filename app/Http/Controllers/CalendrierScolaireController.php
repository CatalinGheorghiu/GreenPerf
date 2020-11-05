<?php

namespace App\Http\Controllers;

use App\CalendrierScolaire;
use Illuminate\Http\Request;

class CalendrierScolaireController extends Controller
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
        return view('calendriers_scolaires.index');
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
     * @param  \App\CalendrierScolaire  $calendrierScolaire
     * @return \Illuminate\Http\Response
     */
    public function show(CalendrierScolaire $calendrierScolaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalendrierScolaire  $calendrierScolaire
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendrierScolaire $calendrierScolaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalendrierScolaire  $calendrierScolaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendrierScolaire $calendrierScolaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalendrierScolaire  $calendrierScolaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendrierScolaire $calendrierScolaire)
    {
        //
    }
}
