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
        $post = Admins::paginate(5);
        // return view('backEnd.layout.content', compact('post'));
        return view('backEnd.layout.content', ['post' => $post]);
    }

    public function summernote(){
        return view('backEnd.layout.summernote');
    }

    public function ckeditor(){
        return view('backEnd.layout.ckeditor');
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
        return view('backEnd.layout.edit', compact('admins'));
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
        //validasi data
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            // 'image' => 'required',
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'title' => request()->title,
            'author' => request()->author,
            'content' => request()->content,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');

            $path = Storage::putFile('public/image',$image);
            $data['image'] = $path;
        }

        $admins = $admins->update($data);

        if($admins){
            return Redirect()->to('/admin')->withSuccess('data berhasil diubah');
        }else{
            return back()->withErrors('data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admins  $admins
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admins $admins)
    {
        if(Storage::get($admins->image)){
            Storage::delete($admins->image);
        }

        $admins = $admins -> delete();

        if($admins){
            return back()->withSuccess('Deleted success');
        }else{
            return back()->withErrors('Deleted Fail');
        }
    }
}