<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class DataKartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datakartukeluarga = KartuKeluarga::all();
        return view('pages.backsite.datakartukeluarga.index', compact('datakartukeluarga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datakartukeluarga = KartuKeluarga::all();
        return view('pages.backsite.datakartukeluarga.create', compact('datakartukeluarga'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'jenis_pekerjaan' => 'required|string|max:255',
        ]);
        KartuKeluarga::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
        ]);

        return redirect()->route('datakartukeluarga.index')->with('success', 'Data Kartu Keluarga Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datakartukeluarga = KartuKeluarga::find($id);
        return view('datakartukeluarga.show', compact('datakartukeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datakartukeluarga = KartuKeluarga::find($id);
        return view('pages.backsite.datakartukeluarga.edit', compact('datakartukeluarga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datakartukeluarga = KartuKeluarga::find($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:225',
            'jenis_kelamin' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:255',
            'jenis_pekerjaan' => 'required|string|max:255',
        ]);
        $datakartukeluarga->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
        ]);

        return redirect()->route('datakartukeluarga.index')->with('success', 'Data Kartu Keluarga Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datakartukeluarga = KartuKeluarga::find($id);
        $datakartukeluarga->delete();

        return redirect()->route('datakartukeluarga.index')->with('success', 'Data Kartu Keluarga deleted successfully');
    }
}
