<?php

namespace App\Http\Controllers;

use App\Fermeture;
use Illuminate\Http\Request;

class FermetureController extends Controller
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
        return view('fermetures.index');
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
     * @param  \App\Fermeture  $fermeture
     * @return \Illuminate\Http\Response
     */
    public function show(Fermeture $fermeture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fermeture  $fermeture
     * @return \Illuminate\Http\Response
     */
    public function edit(Fermeture $fermeture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fermeture  $fermeture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fermeture $fermeture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fermeture  $fermeture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fermeture $fermeture)
    {
        //
    }
}
