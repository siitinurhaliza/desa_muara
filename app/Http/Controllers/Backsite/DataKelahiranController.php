<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\DataKelahiran;
use Illuminate\Http\Request;

class DataKelahiranController extends Controller
{
    public function index()
    {
        $datakelahiran = DataKelahiran::all();
        return view('pages.backsite.datakelahiran.index', compact('datakelahiran'));
        
    }


    public function create()
    {
        $datakelahiran = DataKelahiran::all();
        return view('pages.backsite.datakelahiran.create',compact('datakelahiran'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|string|max:255',
            'waktu_kelahiran' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'No_Hp' => 'required|string|max:255',
        ]);
        DataKelahiran::create([
            'nama' => $request->nama,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ayah,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'waktu_kelahiran' => $request->waktu_kelahiran,
            'Alamat' => $request->Alamat,
            'No_Hp' => $request->No_Hp, 
        ]);

        return redirect()->route('datakelahiran.index')->with('success', 'Penduduk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $datakelahiran = DataKelahiran::find($id);
        return view('datakelahiran.show',compact('datakelahiran '));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datakelahiran = DataKelahiran::find($id);
        return view('pages.backsite.datakelahiran.edit',compact('datakelahiran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datakelahiran = DataKelahiran::find($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|string|max:255',
            'waktu_kelahiran' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'No_Hp' => 'required|string|max:255',
        ]);

        $datakelahiran->update([
            'nama' => $request->nama,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ayah,
            'Tanggal_Lahir' => $request->Tanggal_Lahir,
            'waktu_kelahiran' => $request->waktu_kelahiran,
            'Alamat' => $request->Alamat,
            'No_Hp' => $request->No_Hp, 
        ]);

        return redirect()->route('datakelahiran.index')->with('success', 'Penduduk created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datakelahiran = DataKelahiran::find($id);

        $datakelahiran->delete();
        return redirect()->route('datakelahiran.index')->with('success', 'datakelahiran deleted successfully');
    }
}
