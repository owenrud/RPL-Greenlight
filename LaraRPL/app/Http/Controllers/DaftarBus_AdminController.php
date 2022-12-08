<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use Image;

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
        $bus->Sifat = $req->Sifat;
        $bus->Kode_Bus = $req->Kode_Bus;
        $bus->pabrikan = $req->pabrikan;
        $bus->no_mesin = $req->no_mesin;
        $bus->Plat_nomor = $req->Plat_nomor;
        if($req->file('foto')){
            $bus->foto = $req->file('foto')->store('bus-images');
        }
        $bus->Area = $req->Area;
        $bus->Kapasitas = $req->Kapasitas;
        $bus->Bagasi = $req->Bagasi;
        $bus->save();

        return redirect('/dataBus');
    }

    public function deleteBus($id) {
        $bus = Bus::find(decrypt($id))->delete();
         //dd (decrypt($user->password));
        return redirect('/dataBus');
    }
}
