<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('backEnd.user.index', compact('user'));
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // $user = User::all();
        return view('backEnd.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'foto' => 'required',
            'name' => 'required',
            'profesi' => 'required',
            'deskripsi' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->messages());
        }

        $data = [
            'name' => request()->name,
            'profesi' => request()->profesi,
            'deskripsi' => request()->deskripsi,
        ];

        if($request->hasFile('foto')){
            $foto = $request->file('foto');

            if(Storage::get($user->foto)){
                Storage::delete($user->foto);
            }

            $path = Storage::putFile('public/images', $foto);
            $data['foto'] = $path;
        }

        $user = $user->update($data);
// dd($data);
        if($user){
            return Redirect()->to('/user')->withSucces('Updated');
        }else{
            return back()->withErrors('Failed');
        }
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
