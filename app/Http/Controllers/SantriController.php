<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SantriRequest;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = Santri::all();
        return view('pages.santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.santri.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $santri = new Santri;
    
        $santri->nis = $request->nis;
        $santri->nama = $request->nama;
        $santri->telepon = $request->telepon;
        $santri->jenis_kelamin = $request->jenis_kelamin;
        $santri->tempat_lahir = $request->tempat_lahir;
        $santri->tanggal_lahir = $request->tanggal_lahir;
        $santri->alamat = $request->alamat;
        $santri->users_id = $request->users_id;
        
        $santri->save();

        return redirect('santri');
        // return $request;
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
    public function edit(Santri $santri)
    {
        $users = User::all();
        return view('pages.santri.edit', compact('santri','users'));
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
        $santri = Santri::find($id);

        $santri->nis = $request->nis;
        $santri->nama = $request->nama;
        $santri->telepon = $request->telepon;
        $santri->jenis_kelamin = $request->jenis_kelamin;
        $santri->tempat_lahir = $request->tempat_lahir;
        $santri->tanggal_lahir = $request->tanggal_lahir;
        $santri->alamat = $request->alamat;
        $santri->users_id = $request->users_id;

        $santri->save();
        
        return redirect()->route('santri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $santri = Santri::find($id);

        $santri->delete();

        return redirect()->route('santri');
    }
}
