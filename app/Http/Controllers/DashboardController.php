<?php

namespace App\Http\Controllers;

use App\Models\HafalanFiqih;
use App\Models\HafalanQuran;
use App\Models\JadwalPiket;
use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\User;
use App\Models\Muhadoroh;

class DashboardController extends Controller
{
    public function index()
    {
        $santri = Santri::all()->count();
        $users = User::all()->count();
        $muhadoroh = Muhadoroh::all()->count();
        $jadwalpiket = JadwalPiket::all()->count();
        $fiqih = HafalanFiqih::all()->count();
        $quran = HafalanQuran::all()->count();
        return view('pages.dashboard', compact('santri', 'users', 'muhadoroh','jadwalpiket','fiqih','quran'));
    }
}
