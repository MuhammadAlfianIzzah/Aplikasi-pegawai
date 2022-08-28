<?php

namespace App\Http\Controllers;

use App\Http\Requests\GolonganPostRequest;
use App\Http\Requests\GolonganUpdateRequest;
use App\Models\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    public function index()
    {
        $golongans = Golongan::paginate(5);
        return view("pages.golongan.index", compact("golongans"));
    }
    public function show(Golongan $golongan)
    {
        return view("pages.golongan.show", compact("golongan"));
    }
    public function store(GolonganPostRequest $request)
    {
        $attr = $request->validated();

        Golongan::create($attr);
        return redirect()->back()->with("success", "Berhasil menambahkan data Golongan");
    }
    public function destroy(Golongan $golongans)
    {
        $golongans->delete();
        return redirect()->back()->with("success", "Berhasil menghapus data golongan");
    }
    public function edit(Golongan $golongan)
    {
        return view("pages.golongan.edit", compact("golongan"));
    }
    public function update(Golongan $golongan, GolonganUpdateRequest $request)
    {
        $attr = $request->validated();
        $golongan->update($attr);
        return redirect()->route("golongan")->with("success", "Berhasil mengupdate data golongan");
    }
}
