<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function index()
    {
        $datapenduduk = DataPenduduk::all();
        return view('pages.backsite.datapenduduk.index', compact('datapenduduk'));
    }


    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        $nik = KartuKeluarga::get();
        return view('pages.backsite.datapenduduk.create', compact('datapenduduk', 'nik'));
    }


    public function store(Request $request)
    {
        // Retrieve KartuKeluarga based on the selected NIK
        $kartu_keluarga = KartuKeluarga::where('nik', $request->kartu_keluarga_nik)->first();

        $request->validate([
            // 'nama' => 'required|string|max:255',
            // 'NIK' => 'required|string|max:255',
            // 'Tanggal_Lahir' => 'required|string|max:255',
            // 'Alamat' => 'required|string|max:255',
            // 'No_Hp' => 'required|string|max:255',
        ]);
        DataPenduduk::create([
            'nama' => $request->nama,
            'NIK' => $request->kartu_keluarga_nik,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Alamat' => $request->Alamat,
            'No_Hp' => $request->No_Hp,
            'kartu_keluarga_id' => $kartu_keluarga->id,
        ]);

        return redirect()->route('datapenduduk.index')->with('success', 'Penduduk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $datapenduduk = DataPenduduk::find($id);
        return view('datapenduduk.show', compact('datapenduduk '));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datapenduduk = DataPenduduk::find($id);
        return view('pages.backsite.datapenduduk.edit', compact('datapenduduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datapenduduk = DataPenduduk::find($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'NIK' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'No_Hp' => 'required|string|max:255',

        ]);

        $datapenduduk->update([
            'nama' => $request->nama,
            'NIK' => $request->NIK,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'Alamat' => $request->Alamat,
            'No_Hp' => $request->No_Hp,
        ]);

        return redirect()->route('datapenduduk.index')->with('success', 'Penduduk created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datapenduduk = DataPenduduk::find($id);

        $datapenduduk->delete();
        return redirect()->route('datapenduduk.index')->with('success', 'datapenduduk deleted successfully');
    }
}
