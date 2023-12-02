<?php

namespace App\Http\Controllers;

use App\Models\Masters;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontEnd.master');
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
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function show(Masters $masters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function edit(Masters $masters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Masters $masters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masters  $masters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Masters $masters)
    {
        //
    }
}
