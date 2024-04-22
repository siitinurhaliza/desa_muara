<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\DataKematian;
use App\Models\DataPenduduk;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class DataKematianController extends Controller
{
    public function index()
    {
        $datakematian = DataKematian::all();
        return view('pages.backsite.datakematian.index', compact('datakematian'));
    }

    public function create()
    {
        $datakematian = DataKematian::all();
        $nik = DataPenduduk::pluck('NIK', 'id'); // Retrieve both id and NIK
        return view('pages.backsite.datakematian.create', compact('datakematian', 'nik'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'penduduk_nik' => 'required|string|max:255|exists:data_penduduks,NIK',
            'tgl_lahir' => 'required|string|max:255',
            'tgl_mati' => 'required|string|max:255',
            'penyebab' => 'required|string|max:255',
        ], [
            'penduduk_nik.exists' => 'NIK tidak ditemukan.',
        ]);

        // Find penduduk based on penduduk_nik
        $penduduk = DataPenduduk::where('NIK', $request->penduduk_nik)->first();


        if ($penduduk) {
            // Create a new DataKematian record
            DataKematian::create([
                'nama' => $request->nama,
                'penduduk_id' => $penduduk->id,
                'tgl_lahir' => $request->tgl_lahir,
                'tgl_mati' => $request->tgl_mati,
                'penyebab' => $request->penyebab,
            ]);

            return redirect()->route('datakematian.index')->with('success', 'Data Kematian Berhasil Ditambah');
        } else {
            // If penduduk with the provided NIK is not found, redirect back with error
            return redirect()->back()->withInput()->withErrors(['penduduk_nik' => 'NIK tidak ditemukan']);
        }
    }




    public function show($id)
    {
        $datakematian = DataKematian::find($id);
        return view('pages.backsite.datakematian.show', compact('datakematian'));
    }

    public function edit($id)
    {
        $datakematian = DataKematian::find($id);
        return view('pages.backsite.datakematian.edit', compact('datakematian'));
    }

    public function update(Request $request, $id)
    {
        $datakematian = DataKematian::find($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'penduduk_nik' => 'required|string|max:255',
            'tgl_lahir' => 'required|string|max:255',
            'tgl_mati' => 'required|string|max:255',
            'penyebab' => 'required|string|max:255',
        ]);

        $datakematian->update([
            'nama' => $request->nama,
            'penduduk_nik' => $request->nik,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_mati' => $request->tgl_mati,
            'penyebab' => $request->penyebab,
        ]);

        return redirect()->route('datakematian.index')->with('success', 'Data Kematian updated successfully');
    }

    public function destroy($id)
    {
        $datakematian = DataKematian::find($id);
        $datakematian->delete();

        return redirect()->route('datakematian.index')->with('success', 'Data Kematian deleted successfully');
    }
}
