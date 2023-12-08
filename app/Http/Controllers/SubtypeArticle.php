<?php

namespace App\Http\Controllers;

use App\Models\Subtypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class SubtypeArticle extends Controller
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
        $validator = Validator::make($request->all(), [
            'id_subtype',
            'nama',
            'subtype',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id_subtype' => $request->id_subtype,
            'nama' => $request->nama,
            'subtype' => $request->subtype,
        ];

        $subtypes = Subtypes::create($data);

        if($subtypes){
            return Redirect()->to('/admin/subtypes')->withSuccess('Sukses');

        }else{
            return back()->withErrors('Failed');
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subtypes  $subtypes
     * @return \Illuminate\Http\Response
     */
    public function show(Subtypes $subtypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subtypes  $subtypes
     * @return \Illuminate\Http\Response
     */
    public function edit(Subtypes $subtypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subtypes  $subtypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subtypes $subtypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtypes  $subtypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtypes $subtypes)
    {
        //
    }
}
