<?php

use App\Http\Controllers\GolonganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");
Route::get("/tes", [HomeController::class, "tes"]);
Route::middleware(["auth"])->group(function () {
    Route::controller(PegawaiController::class)->group(function () {
        Route::get("/pegawai/cetak", "cetak")->name("cetak-pegawai");
        Route::get("/pegawai", "index")->name("pegawai");
        Route::get("/pegawai/{pegawai:nip}", "show")->name("show-pegawai");
        Route::post("/pegawai", "store")->name("store-pegawai");
        Route::get("/pegawai/edit/{pegawai:nip}", "edit")->name("edit-pegawai");
        Route::put("/pegawai/edit/{pegawai:nip}", "update")->name("update-pegawai");
        Route::delete("/pegawai/{pegawai:nip}", "destroy")->name("delete-pegawai");
    });
    Route::controller(GolonganController::class)->group(function () {
        Route::get("/golongan", "index")->name("golongan");
        Route::get("/golongan/{golongan:kode}", "show")->name("show-golongan");
        Route::post("/golongan", "store")->name("store-golongan");
        Route::get("/golongan/edit/{golongan:kode}", "edit")->name("edit-golongan");
        Route::put("/golongan/edit/{golongan:kode}", "update")->name("update-golongan");
        Route::delete("/golongan/{golongans:kode}", "destroy")->name("delete-golongan");
    });
    Route::controller(UnitKerjaController::class)->group(function () {
        Route::get("/unit_kerja", "index")->name("unit_kerja");
        Route::get("/unit_kerja/{unit_kerja:id}", "show")->name("show-unit_kerja");
        Route::post("/unit_kerja", "store")->name("store-unit_kerja");
        Route::get("/unit_kerja/edit/{unit_kerja:id}", "edit")->name("edit-unit_kerja");
        Route::put("/unit_kerja/edit/{unit_kerja:id}", "update")->name("update-unit_kerja");
        Route::delete("/unit_kerja/{unit_kerjas:id}", "destroy")->name("delete-unit_kerja");
    });
    Route::controller(JabatanController::class)->group(function () {
        Route::get("/jabatan", "index")->name("jabatan");
        Route::get("/jabatan/{jabatan:id}", "show")->name("show-jabatan");
        Route::post("/jabatan", "store")->name("store-jabatan");
        Route::get("/jabatan/edit/{jabatan:id}", "edit")->name("edit-jabatan");
        Route::put("/jabatan/edit/{jabatan:id}", "update")->name("update-jabatan");
        Route::delete("/jabatan/{jabatans:id}", "destroy")->name("delete-jabatan");
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
