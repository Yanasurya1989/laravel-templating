<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class Frontend extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Admins::all();
        $post = Admins::paginate(3);
        // $post = Admins::orderBy('id', 'asc')->take(3)->get();//membatasi jumlah postingan
        // $post = Admins::orderBy('id', 'desc')->take(9)->get();
        return view('frontEnd.layout.content', compact('post'));

    }

    public function indexbtr(){
        $post = Admins::all();
        return view('frontEnd.indexfe.recentblog', compact('post'));
    }

    public function detilformthem($id){
        $template = Admins::where('id', $id)->get();
        return view('frontEnd.indexfe.blogsdetil.themeblogsdetil', compact('template'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//dari route
    {
        $id_var = Admins::where('id', $id)->get();
        return view('frontEnd.layout.detil', compact('id_var'));

        // return view('frontEnd.indexfe.blogdetil');
    }

    public function showdetil($id){
        $template = Admins::where('id', $id)->get();
        return view('frontEnd.indexfe.blogsdetil.detilsarticle', compact('template'));
    }

    // public function showthemeblogdetil($id){
    //     $template = Admins::where('id', $id)->get();
    //     return view('d');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
