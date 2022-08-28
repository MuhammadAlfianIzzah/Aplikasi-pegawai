<?php

namespace App\Http\Controllers;

use App\Http\Requests\PegawaiPostRequest;
use App\Http\Requests\PegawaiUpdateRequest;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\UnitKerja;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;


class PegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::paginate(5);
        $jabatans = Jabatan::get();
        $golongans = Golongan::get();
        $unit_kerjas = UnitKerja::get();
        return view("pages.pegawai.index", compact("pegawais", "golongans", "jabatans", "unit_kerjas"));
    }
    public function store(PegawaiPostRequest $request)
    {
        $attr = $request->validated();
        $attr["foto"] = $request->file("foto")->store("foto");

        Pegawai::create($attr);
        return redirect()->back()->with("success", "Berhasil menambahkan data pegawai");
    }
    public function destroy(Pegawai $pegawai)
    {
        if (Storage::exists($pegawai->foto)) {
            Storage::delete($pegawai->foto);
        }
        $pegawai->delete();
        return redirect()->back()->with("success", "Berhasil menghapus data pegawai");
    }
    public function show(Pegawai $pegawai)
    {
        return view("pages.pegawai.show", compact("pegawai"));
    }

    public function edit(Pegawai $pegawai)
    {
        return view("pages.pegawai.edit", compact("pegawai"));
    }
    public function update(Pegawai $pegawai, PegawaiUpdateRequest $request)
    {
        $attr = $request->validated();
        if (!empty($attr["foto"])) {
            $attr["foto"] = $request->file("foto")->store("foto");
            Storage::delete($pegawai->foto);
        }
        $pegawai->update($attr);
        return redirect()->route("pegawai")->with("success", "Berhasil mengupdate data pegawai");
    }
    public function cetak()
    {
        $pegawai = Pegawai::get();
        $pdf = Pdf::loadView('pages.pegawai.cetak', compact("pegawai"))->setPaper('a4', 'landscape');
        return $pdf->download('invoice.pdf');
    }
}
