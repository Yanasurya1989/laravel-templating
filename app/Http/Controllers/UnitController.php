<?php

namespace App\Http\Controllers;

use App\Models\Units;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Units::paginate(5);
        return view('backEnd.unit.index', compact('post'));
    }

    public function feature(){
        $feature = Units::all();
        return view('frontEnd.indexfe.master', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.unit.insert');
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
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        // mengembalikan pesan eror
        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');

            $path = Storage::putFileAs('public/images', $image, $image->getClientOriginalName());
            $data['image'] = $path;
        }

        $post = Units::create($data);

        if($post){
            return Redirect()->to('/unit')->withSuccess('Data berhasil ditambahkan');

        }else{
            return back()->withErrors('Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(Units $units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(Units $units)
    {
        return view('backEnd.unit.edit', compact('units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Units $units)
    {
        //validasi data
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'image',
            'title' => 'required',
            'content' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'title' => request()->title,
            'content' => request()->content,
        ];

        if($request->hasFile('image')){
            $image = $request->file('image');

            $path = Storage::putFile('public/images',$image);
            $data['image'] = $path;
        }

        $admins = $units->update($data);

        if($admins){
            return Redirect()->to('/unit')->withSuccess('data berhasil diubah');
        }else{
            return back()->withErrors('data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy(Units $units)
    {
        if(Storage::get($units->image)){
            Storage::delete($units->image);
        }

        $units = $units -> delete();

        if($units){
            return back()->withSuccess('Deleted success');
        }else{
            return back()->withErrors('Deleted Fail');
        }
    }
}
