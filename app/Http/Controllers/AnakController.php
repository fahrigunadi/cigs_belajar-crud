<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Ortu;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {
        $anak = Anak::all();

        return view('anak.index', ['anak' => $anak]);
    }

    public function create()
    {
        $ortus = Ortu::query()->whereDoesntHave('anak')->get();

        return view('anak.create', ['ortus' => $ortus]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'ortu_id' => 'required|exists:ortus,id|unique:anak,ortu_id',
        ]);

        Anak::create($validated);

        return redirect('/anak')->with('berhasil', "$request->nama Berhasil ditambahkan!");
    }

    public function edit(Anak $anak)
    {
        $ortus = Ortu::all();

        return view('anak.edit', compact('anak', 'ortus'));
    }

    public function update(Request $request, Anak $anak)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'ortu_id' => 'required|exists:ortus,id',
        ]);

        $anak->update($validated);

        return redirect()->route('anak.index')->with('berhasil', "$request->nama Berhasil diubah!");
    }

    public function destroy(Anak $anak)
    {
        $anak->delete();

        return redirect()->route('anak.index')->with('berhasil', "$anak->nama Berhasil dihapus!");
    }
}
