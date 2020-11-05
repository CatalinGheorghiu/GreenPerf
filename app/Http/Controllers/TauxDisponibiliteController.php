<?php

namespace App\Http\Controllers;

use App\TauxDisponibilite;
use Illuminate\Http\Request;

class TauxDisponibiliteController extends Controller
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
        return view('taux_disponibilites.index');
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
     * @param  \App\TauxDisponibilite  $tauxDisponibilite
     * @return \Illuminate\Http\Response
     */
    public function show(TauxDisponibilite $tauxDisponibilite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TauxDisponibilite  $tauxDisponibilite
     * @return \Illuminate\Http\Response
     */
    public function edit(TauxDisponibilite $tauxDisponibilite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TauxDisponibilite  $tauxDisponibilite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TauxDisponibilite $tauxDisponibilite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TauxDisponibilite  $tauxDisponibilite
     * @return \Illuminate\Http\Response
     */
    public function destroy(TauxDisponibilite $tauxDisponibilite)
    {
        //
    }
}
