<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Articles::all();
        $articles = Articles::paginate(5);
        // $categories = Categories::all();
        // dd($articles);b
        return view('backEnd.article.content', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backEnd.article.insert', compact('categories'));
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
            'gambar' => 'required',
            'title' => 'required',
            'content' => 'required',
            'id_category' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id_user' => Auth::id(),
            'title' => $request->title,
            'content' => $request->content,
            'id_category' => $request->id_category,
        ];

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');

            $path = Storage::putFileAs('public/images', $gambar, $gambar->getClientOriginalName());
           
            $data['gambar'] = $path;
        }

        $articles = Articles::create($data);

        if($articles){
            return Redirect()->to('/admin/articles')->withSuccess('Data berhasil ditambahkan');

        }else{
            return back()->withErrors('Gagal menambahkan data');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Articles $articles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Articles $articles)
    {
        return view('backEnd.article.edit', compact('articles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articles $articles)
    {
        $validator = Validator::make($request->all(),[
            'gambar',
            'title' => 'required',
            'content' => 'required',
            // 'id_category',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'id' => request()->id,
            'title' => request()->title,
            'content' => request()->content,
            // 'id_category' => $request->id_category,
        ];

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');

            $path = Storage::putFile('public/images', $gambar);
            $data['gambar'] = $path;
        }

        $content = $articles->update($data);

        if($content){
            return Redirect()->to('/admin/articles')->withSuccess('Updated');
        }else{
            return back()->withErrors('Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articles $articles)
    {
        if(Storage::get($articles->gambar)){
            Storage::delete($articles->gambar);
        }

        $articles = $articles -> delete();

        if($articles){
            return back()->withSuccess('Deleted');
        }else{
            return back()->withErrors('Failed');
        }
    }
}
