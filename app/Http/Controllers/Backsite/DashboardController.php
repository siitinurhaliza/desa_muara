<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\DataKelahiran;
use App\Models\DataKematian;
use App\Models\DataPenduduk;
use App\Models\KartuKeluarga;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datapenduduk = DataPenduduk::count();
        $datakelahiran = DataKelahiran::count();
        $datakematian = DataKematian::count();
        $datakartukeluarga = KartuKeluarga::count();

        return view('pages.backsite.dashboard', [
            'title' => 'Beranda',
            'datapenduduk' => $datapenduduk,
            'datakelahiran' => $datakelahiran,
            'datakematian' => $datakematian,
            'datakartukeluarga' => $datakartukeluarga
        ]);
    }
}
