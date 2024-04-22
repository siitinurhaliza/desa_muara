<?php

use App\Http\Controllers\Backsite\DataKelahiranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backsite\DataPendudukController;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\DataKartuKeluargaController;
use App\Http\Controllers\Backsite\DataKematianController;

Route::get('/', function () {
    return view('layaout.master');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//route data Penduduk
Route::get('/datapenduduk', [DataPendudukController::class, 'index'])->name('datapenduduk.index');
Route::get('/datapenduduk/create', [DataPendudukController::class, 'create'])->name('datapenduduk.create');
Route::post('/datapenduduk/store', [DataPendudukController::class, 'store'])->name('datapenduduk.store');
Route::get('/datapenduduk/{datapenduduk}/edit', [DataPendudukController::class, 'edit'])->name('datapenduduk.edit');
Route::put('/datapenduduk/{datapenduduk}/update', [DataPendudukController::class, 'update'])->name('datapenduduk.update');
Route::delete('/datapenduduk/{datapenduduk}/destroy', [DataPendudukController::class, 'destroy'])->name('datapenduduk.destroy');
Route::get('/datapenduduk/{id}/show', [DataPendudukController::class, 'show'])->name('datapenduduk.show');

//route data kelahiran
Route::get('/datakelahiran', [DataKelahiranController::class, 'index'])->name('datakelahiran.index');
Route::get('/datakelahiran/create', [DataKelahiranController::class, 'create'])->name('datakelahiran.create');
Route::post('/datakelahiran/store', [DataKelahiranController::class, 'store'])->name('datakelahiran.store');
Route::get('/datakelahiran/{datakelahiran}/edit', [DataKelahiranController::class, 'edit'])->name('datakelahiran.edit');
Route::put('/datakelahiran/{datakelahiran}/update', [DataKelahiranController::class, 'update'])->name('datakelahiran.update');
Route::delete('/datakelahiran/{datakelahiran}/destroy', [DataKelahiranController::class, 'destroy'])->name('datakelahiran.destroy');
Route::get('/datakelahiran/{id}/show', [DataKelahiranController::class, 'show'])->name('datakelahiran.show');

//route data kematian
Route::get('/datakematian', [DataKematianController::class, 'index'])->name('datakematian.index');
Route::get('/datakematian/create', [DataKematianController::class, 'create'])->name('datakematian.create');
Route::post('/datakematian/store', [DataKematianController::class, 'store'])->name('datakematian.store');
Route::get('/datakematian/{datakematian}/edit', [DataKematianController::class, 'edit'])->name('datakematian.edit');
Route::put('/datakematian/{datakematian}/update', [DataKematianController::class, 'update'])->name('datakematian.update');
Route::delete('/datakematian/{datakematian}/destroy', [DataKematianController::class, 'destroy'])->name('datakematian.destroy');
Route::get('/datakematian/{id}/show', [DataKematianController::class, 'show'])->name('datakematian.show');

Route::get('/datakartukeluarga', [DataKartuKeluargaController::class, 'index'])->name('datakartukeluarga.index');
Route::get('/datakartukeluarga/create', [DataKartuKeluargaController::class, 'create'])->name('datakartukeluarga.create');
Route::post('/datakartukeluarga/store', [DataKartuKeluargaController::class, 'store'])->name('datakartukeluarga.store');
Route::get('/datakartukeluarga/{datakartukeluarga}/edit', [DataKartuKeluargaController::class, 'edit'])->name('datakartukeluarga.edit');
Route::put('/datakartukeluarga/{datakartukeluarga}/update', [DataKartuKeluargaController::class, 'update'])->name('datakartukeluarga.update');
Route::delete('/datakartukeluarga/{datakartukeluarga}/destroy', [DataKartuKeluargaController::class, 'destroy'])->name('datakartukeluarga.destroy');
Route::get('/datakartukeluarga/{id}/show', [DataKartuKeluargaController::class, 'show'])->name('datakartukeluarga.show');
