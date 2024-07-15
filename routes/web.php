<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('AdminMaster.login');
});

use App\Livewire\Dasbor;
use App\Livewire\Profil;
use App\Livewire\Pengaturan;
use App\Livewire\Pengguna\Index as Pengguna;

// database gereja
use App\Livewire\Pemuda\Index as Pemuda;
use App\Livewire\Wilayah\Index as Wilayah;
use App\Livewire\Gereja\Index as Gereja;
use App\Livewire\Pengumuman\Index as Pengumuman;
use App\Livewire\Agenda\Index as Agenda;
// use App\Livewire\Galeri\Index as Galeri;
// use App\Livewire\Jadwal\Index as Jadwal;

Route::get('/profil', Profil::class)->name('adminmaster.profil');
Route::get('/pengaturan', Pengaturan::class)->name('adminmaster.pengaturan');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dasbor', Dasbor::class)->name('dasbor');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pemuda', Pemuda::class)->name('pemuda');
    Route::get('/wilayah', Wilayah::class)->name('wilayah');
    Route::get('/gereja', Gereja::class)->name('gereja');
    Route::get('/pengumuman', Pengumuman::class)->name('pengumuman');
    Route::get('/agenda', Agenda::class)->name('agenda');
    // Route::get('/galeri', Galeri::class)->name('galeri');
    // Route::get('/jadwal', Jadwal::class)->name('jadwal');
});
