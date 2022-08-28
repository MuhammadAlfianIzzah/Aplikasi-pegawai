<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitKerjaPostRequest;
use App\Http\Requests\UnitKerjaUpdateRequest;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unit_kerjas = UnitKerja::paginate(5);
        return view("pages.unit_kerja.index", compact("unit_kerjas"));
    }
    public function show(UnitKerja $unit_kerja)
    {
        return view("pages.unit_kerja.show", compact("unit_kerja"));
    }
    public function store(UnitKerjaPostRequest $request)
    {
        $attr = $request->validated();

        UnitKerja::create($attr);
        return redirect()->back()->with("success", "Berhasil menambahkan data unit_kerja");
    }
    public function destroy(UnitKerja $unit_kerjas)
    {
        $unit_kerjas->delete();
        return redirect()->back()->with("success", "Berhasil menghapus data unit_kerja");
    }
    public function edit(UnitKerja $unit_kerja)
    {
        return view("pages.unit_kerja.edit", compact("unit_kerja"));
    }
    public function update(UnitKerja $unit_kerja, UnitKerjaUpdateRequest $request)
    {
        $attr = $request->validated();
        $unit_kerja->update($attr);
        return redirect()->route("unit_kerja")->with("success", "Berhasil mengupdate data unit_kerja");
    }
}
