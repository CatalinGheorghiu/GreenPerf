<?php

namespace App\Http\Controllers;

use App\Reactivite;
use Illuminate\Http\Request;

class ReactiviteController extends Controller
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
        return view('reactivites.index');
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
     * @param  \App\Reactivite  $reactivite
     * @return \Illuminate\Http\Response
     */
    public function show(Reactivite $reactivite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reactivite  $reactivite
     * @return \Illuminate\Http\Response
     */
    public function edit(Reactivite $reactivite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reactivite  $reactivite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reactivite $reactivite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reactivite  $reactivite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reactivite $reactivite)
    {
        //
    }
}
