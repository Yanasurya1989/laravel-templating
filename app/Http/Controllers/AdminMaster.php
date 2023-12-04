<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminMaster extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Admins::all();
        return view('backEnd.layout.content', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.layout.insert');
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
            'author' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        // mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');

            $path = Storage::putFileAs('public/images', $image, $image->getClientOriginalName());
            $data['image'] = $path;
        }

        $post = Admins::create($data);

        if($post){
            return Redirect()->to('/admin')->withSuccess('Data berhasil ditambahkan');

        }else{
            return back()->withErrors('Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function show(Admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function edit(Admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admins $admins)
    {
        //
    }
}
