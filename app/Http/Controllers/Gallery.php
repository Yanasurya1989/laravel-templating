<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Gallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Galleries::all();
        return view('backEnd.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.gallery.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'teks' => $request->teks,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');

            $path = Storage::putFileAs('public/images', $image, $image->getClientOriginalName());
            $data['image'] = $path;
        }

        $post = Galleries::create($data);

        if($post){
            return Redirect()->to('/gallery')->withSuccess('Data berhasil ditambahkan');

        }else{
            return back()->withErrors('Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function show(Galleries $galleries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function edit(Galleries $galleries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galleries $galleries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galleries  $galleries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galleries $galleries)
    {
        //
    }
}
