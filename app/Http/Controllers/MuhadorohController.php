<?php

namespace App\Http\Controllers;

use App\Models\Muhadoroh;
use App\Models\User;
use App\Models\Santri;
use Illuminate\Http\Request;

class MuhadorohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muhadoroh = Muhadoroh::all();
        return view('pages.muhadoroh.index', compact('muhadoroh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $santri = Santri::all();
        return view('pages.muhadoroh.create', compact('santri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $muhadoroh = new Muhadoroh;

        $muhadoroh->tanggal = $request->tanggal;
        $muhadoroh->keterangan = $request->keterangan;
        $muhadoroh->santri_id = $request->santri_id;

        $muhadoroh->save();

        return redirect('muhadoroh')->with('toast_success', 'Data Berasil di Tambahkan');
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
    public function edit(Muhadoroh $muhadoroh)
    {
        $santri = Santri::all();
        return view('pages.muhadoroh.edit', compact('muhadoroh','santri'));
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
        $muhadoroh = Muhadoroh::find($id);

        $muhadoroh->tanggal = $request->tanggal;
        $muhadoroh->keterangan = $request->keterangan;
        // $muhadoroh->santri_id = $request->santri_id;

        $muhadoroh->save();

        return redirect()->route('muhadoroh')->with('toast_success', 'Data Berasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muhadoroh = Muhadoroh::find($id);

        $muhadoroh->delete();

        return redirect()->route('muhadoroh')->with('toast_success', 'Data Berasil di hapus');
    }
}
