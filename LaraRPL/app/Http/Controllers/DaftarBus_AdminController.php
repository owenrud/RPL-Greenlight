<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class DaftarBus_AdminController extends Controller
{
    public function getAllBus()
    {
        $datas = Bus::all();

        return view('admin.dataBus', compact(
            'datas'
        ));
    }
    public function create()
    {
        $bus = new Bus;
        return view('admin.formInputBus', compact(
            'bus'
        ));
    // return view('admin.formInputBus');

    }

    public function addDataBus(Request $req)
    {

        $bus = new Bus;

        $bus->Nama_Bus = $req->Nama_Bus;
        $bus->Sifat = $req->boolean('Sifat');
        $bus->Kode_Bus = $req->Kode_Bus;
        $bus->pabrikan = $req->pabrikan;
        $bus->no_mesin = $req->no_mesin;
        $bus->Plat_nomor = $req->Plat_nomor;
        $bus->foto = $req->foto;
        $bus->Area = $req->Area;
        $bus->Kapasitas = $req->Kapasitas;
        $bus->Bagasi = $req->Bagasi;
        $bus->save();

        return redirect('/dataBus');
    }
}
