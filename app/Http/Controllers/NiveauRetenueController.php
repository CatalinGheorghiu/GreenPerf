<?php

namespace App\Http\Controllers;

use App\NiveauRetenue;
use Illuminate\Http\Request;

class NiveauRetenueController extends Controller
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
        return view('niveaux_retenues.index');
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
     * @param  \App\NiveauRetenue  $niveauRetenue
     * @return \Illuminate\Http\Response
     */
    public function show(NiveauRetenue $niveauRetenue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NiveauRetenue  $niveauRetenue
     * @return \Illuminate\Http\Response
     */
    public function edit(NiveauRetenue $niveauRetenue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NiveauRetenue  $niveauRetenue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NiveauRetenue $niveauRetenue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NiveauRetenue  $niveauRetenue
     * @return \Illuminate\Http\Response
     */
    public function destroy(NiveauRetenue $niveauRetenue)
    {
        //
    }
}
