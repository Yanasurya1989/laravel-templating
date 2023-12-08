<?php

namespace App\Http\Controllers;

use App\Models\Heads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $head = Heads::all();
        return view('backEnd.layout.head.head', compact('head'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.layout.head.insert');
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
            'favicons',
            'title',
        ]);

        // mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'favicons' => $request->favicons,
            'title' => $request->title,
        ];

        if($request->hasFile('favicons')){
            $favicon = $request->file('favicons');

            $path = Storage::putFileAs('public/images', $favicon, $favicon->getClientOriginalName());
            $data['favicons'] = $path;
        }

        $head = Heads::create($data);

        if($head){
            return Redirect()->to('/head')->withSuccess('Data berhasil ditambahkan');

        }else{
            return back()->withErrors('Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heads  $heads
     * @return \Illuminate\Http\Response
     */
    public function show(Heads $heads)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heads  $heads
     * @return \Illuminate\Http\Response
     */
    public function edit(Heads $heads)
    {
        return view('backEnd.layout.head.edit', compact('heads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heads  $heads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heads $heads)
    {
        //validasi data
        $validator = Validator::make($request->all(), [
            'id',
            'favicon',
            'title',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'favicon' => request()->favicon,
            'title' => request()->title,
        ];

        if($request->hasFile('favicon')){
            $favicon = $request->file('favicon');

            $path = Storage::putFile('public/favicon',$favicon);
            $data['favicon'] = $path;
        }

        $heads = $heads->update($data);

        if($heads){
            return Redirect()->to('/head')->withSuccess('data berhasil diubah');
        }else{
            return back()->withErrors('data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heads  $heads
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heads $heads)
    {
        //
    }
}
