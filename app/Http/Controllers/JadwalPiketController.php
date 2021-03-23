<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\JadwalPiket;
use Illuminate\Http\Request;

class JadwalPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piket = JadwalPiket::all();
        return view('pages.jadwalpiket.index', compact('piket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $santri = Santri::all();
        return view('pages.jadwalpiket.create', compact('santri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $piket = new JadwalPiket;

        $piket->hari = $request->hari;
        $piket->tanggal = $request->tanggal;
        $piket->tempat = $request->tempat;
        $piket->santri_id = $request->santri_id;

        $piket->save();

        return redirect('jadwalpiket')->with('toast_success', 'Data Berasil di tambahkan');
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
    public function edit(JadwalPiket $jadwalpiket)
    {
        $santri = Santri::all();
        return view('pages.jadwalpiket.edit', compact('santri', 'jadwalpiket'));
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
        $jadwalpiket = JadwalPiket::find($id);

        $jadwalpiket->hari = $request->hari;
        $jadwalpiket->tanggal = $request->tanggal;
        $jadwalpiket->tempat = $request->tempat;

        $jadwalpiket->save();

        return redirect()->route('jadwalpiket')->with('toast_success', 'Data Berasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwalpiket = JadwalPiket::find($id);

        $jadwalpiket->delete();

        return redirect()->route('jadwalpiket')->with('toast_success', 'Data Berasil di hapus');
    }
}
