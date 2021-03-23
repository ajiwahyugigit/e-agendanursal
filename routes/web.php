<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\MuhadorohController;
use App\Http\Controllers\HafalanFiqihController;
use App\Http\Controllers\HafalanQuranController;
use App\Http\Controllers\JadwalPiketController;
use App\Models\HafalanQuran;
use App\Models\JadwalPiket;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', [DashboardController::class, 'index'])
    ->name('/');

// Route::get('/', [DashboardController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])
    ->name('users');
Route::get('/users/create', [UserController::class, 'create'])
    ->name('user.create');
Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])
    ->name('users.destroy');

Route::get('/santri', [SantriController::class, 'index'])
    ->name('santri');
Route::get('/santri/create', [SantriController::class, 'create'])
    ->name('santri.create');
Route::post('/santri/store', [SantriController::class, 'store'])
    ->name('santri.store');
Route::get('/santri/{santri}/edit', [SantriController::class, 'edit'])
    ->name('santri.edit');
Route::delete('/santri/{santri}/delete', [SantriController::class, 'destroy'])
    ->name('santri.destroy');

Route::get('/muhadoroh', [MuhadorohController::class, 'index'])
    ->name('muhadoroh');
Route::get('/muhadoroh/create', [MuhadorohController::class, 'create'])
    ->name('muhadoroh.create');
Route::post('/muhadoroh/store', [MuhadorohController::class, 'store'])
    ->name('muhadoroh.store');
Route::get('/muhadoroh/{muhadoroh}/edit', [MuhadorohController::class, 'edit'])
    ->name('muhadoroh.edit');
Route::put('/muhadoroh/{muhadoroh}/update', [MuhadorohController::class, 'update'])
    ->name('muhadoroh.update');
Route::delete('/muhadoroh/{muhadoroh}/destroy', [MuhadorohController::class, 'destroy'])
    ->name('muhadoroh.destroy');

Route::get('/hafalanfiqih', [HafalanFiqihController::class, 'index'])
    ->name('hafalanfiqih');
Route::get('/hafalanfiqih/create', [HafalanFiqihController::class, 'create'])
    ->name('fiqih.create');
Route::post('/hafalanfiqih/store', [HafalanFiqihController::class, 'store'])
    ->name('fiqih.store');
Route::get('/hafalanfiqih/{hafalanfiqih}/edit', [HafalanFiqihController::class, 'edit'])
    ->name('fiqih.edit');
Route::put('/hafalanfiqih/{hafalanfiqih}/update', [HafalanFiqihController::class, 'update'])
    ->name('fiqih.update');
Route::delete('/hafalanfiqih/{hafalanfiqih}/delete', [HafalanFiqihController::class, 'destroy'])
    ->name('fiqih.destroy');

Route::get('/hafalanquran', [HafalanQuranController::class, 'index'])
    ->name('hafalanquran');
Route::get('/hafalanquran/create', [HafalanQuranController::class, 'create'])
    ->name('quran.create');
Route::post('/hafalanquran/store', [HafalanQuranController::class, 'store'])
    ->name('quran.store');
Route::get('/hafalanquran/{hafalanquran}/edit', [HafalanQuranController::class, 'edit'])
    ->name('quran.edit');
Route::put('/hafalanquran/{hafalanquran}/update', [HafalanQuranController::class, 'update'])
    ->name('quran.update');
Route::delete('/hafalanquran/{hafalanquran}/delete', [HafalanQuranController::class, 'destroy'])
    ->name('quran.destroy');

Route::get('/jadwalpiket', [JadwalPiketController::class, 'index'])
    ->name('jadwalpiket');
Route::get('/jadwalpiket/create', [JadwalPiketController::class, 'create'])
    ->name('piket.create');
Route::post('/jadwalpiket/store', [JadwalPiketController::class, 'store'])
    ->name('piket.store');
Route::get('/jadwalpiket/{jadwalpiket}/edit', [JadwalPiketController::class, 'edit'])
    ->name('piket.edit');
Route::put('/jadwalpiket/{jadwalpiket}/update', [JadwalPiketController::class, 'update'])
    ->name('piket.update');
Route::delete('/jadwalpiket/{jadwalpiket}/delete', [JadwalPiketController::class, 'destroy'])
    ->name('piket.destroy');



