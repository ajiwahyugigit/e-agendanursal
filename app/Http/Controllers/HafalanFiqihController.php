<?php

namespace App\Http\Controllers;

use App\Models\HafalanFiqih;
use App\Models\Muhadoroh;
use App\Models\Santri;
use Illuminate\Http\Request;

class HafalanFiqihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiqih = HafalanFiqih::all();
        return view('pages.hafalanfiqih.index', compact('fiqih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $santri = Santri::all();
        return view('pages.hafalanfiqih.create', compact('santri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $fiqih = new HafalanFiqih;

       $fiqih->tanggal = $request->tanggal;
       $fiqih->hari = $request->hari;
       $fiqih->bab_fiqih = $request->bab_fiqih;
       $fiqih->santri_id = $request->santri_id;

    //    dd($fiqih);

       $fiqih->save();

       return redirect('hafalanfiqih')->with('toast_success', 'Data Berasil di Tambahkan');
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
    public function edit(HafalanFiqih $hafalanfiqih)
    {
        $santri = Santri::all();
        return view('pages.hafalanfiqih.edit', compact('hafalanfiqih', 'santri'));
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
        $hafalanfiqih = HafalanFiqih::find($id);

        $hafalanfiqih->hari = $request->hari;
        $hafalanfiqih->tanggal = $request->tanggal;
        $hafalanfiqih->bab_fiqih = $request->bab_fiqih;

        $hafalanfiqih->save();

        return redirect()->route('hafalanfiqih')->with('toast_success', 'Data Berasil di di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hafalanfiqih = HafalanFiqih::find($id);

        $hafalanfiqih->delete();
        
        return redirect()->route('hafalanfiqih')->with('toast_success', 'Data Berasil di hapus');
    }
}
