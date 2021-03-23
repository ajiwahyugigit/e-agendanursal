<?php

namespace App\Http\Controllers;

use App\Models\HafalanQuran;
use App\Models\Santri;
use Illuminate\Http\Request;

class HafalanQuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quran = HafalanQuran::all();
        return view('pages.hafalanquran.index', compact('quran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $santri = Santri::all();
        return view('pages.hafalanquran.create', compact('santri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quran = new HafalanQuran;

        $quran->hari = $request->hari;
        $quran->tanggal = $request->tanggal;
        $quran->surat_quran = $request->surat_quran;
        $quran->santri_id = $request->santri_id;

        // dd($quran);

        $quran->save();

        return redirect('hafalanquran')->with('toast_success', 'Data Berasil di di Tambah');
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
    public function edit(HafalanQuran $hafalanquran)
    {
        $santri = Santri::all();
        return view('pages.hafalanquran.edit', compact('hafalanquran', 'santri'));
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
        $hafalanquran = HafalanQuran::find($id);

        $hafalanquran->hari = $request->hari;
        $hafalanquran->tanggal = $request->tanggal;
        $hafalanquran->surat_quran = $request->surat_quran;

        $hafalanquran->save();

        return redirect()->route('hafalanquran')->with('toast_success', 'Data Berasil di di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hafalanquran = HafalanQuran::find($id);

        $hafalanquran->delete();

        return redirect()->route('hafalanquran')->with('toast_success', 'Data Berasil di hapus');
    }
}
