<?php

namespace App\Http\Controllers;

use App\Http\Requests\JabatanPostRequest;
use App\Http\Requests\JabatanUpdateRequest;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::paginate(5);
        return view("pages.jabatan.index", compact("jabatans"));
    }
    public function show(Jabatan $jabatan)
    {
        return view("pages.jabatan.show", compact("jabatan"));
    }
    public function store(JabatanPostRequest $request)
    {
        $attr = $request->validated();

        Jabatan::create($attr);
        return redirect()->back()->with("success", "Berhasil menambahkan data jabatan");
    }
    public function destroy(Jabatan $jabatans)
    {
        $jabatans->delete();
        return redirect()->back()->with("success", "Berhasil menghapus data jabatan");
    }
    public function edit(Jabatan $jabatan)
    {
        return view("pages.jabatan.edit", compact("jabatan"));
    }
    public function update(Jabatan $jabatan, JabatanUpdateRequest $request)
    {
        $attr = $request->validated();
        $jabatan->update($attr);
        return redirect()->route("jabatan")->with("success", "Berhasil mengupdate data jabatan");
    }
}
