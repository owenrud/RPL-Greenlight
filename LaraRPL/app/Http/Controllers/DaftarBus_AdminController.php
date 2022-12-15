<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Invoice;

use Image;

class DaftarBus_AdminController extends Controller
{
    public function getAllData()
    {
        $datainvoice = Invoice::all();
        $incomplete = $datainvoice->where('status','=',0);
        $complete = $datainvoice->where('status','=',1);
        $pribadi = $datainvoice->where('sifat','=','Pribadi');
        $instansi = $datainvoice->where('sifat','=','Instansi');
        //dd($instansi);
        return view('admin.dashboard',compact('incomplete','complete','pribadi','instansi'));
    }

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
        $filename = time(). '.' . $req->foto->extension();
        //dd($datas);
        $bus = new Bus;
        $bus->Nama_Bus = $req->Nama_Bus;
        $bus->Sifat = $req->Sifat;
        $bus->Kode_Bus = $req->Kode_Bus;
        $bus->pabrikan = $req->pabrikan;
        $bus->no_mesin = $req->no_mesin;
        $bus->Plat_nomor = $req->Plat_nomor;
        if($req->file('foto')){
            $bus->foto = $req->file('foto')->move(public_path('bus-images'), $filename);
        }
        $bus->Area = $req->Area;
        $bus->Kapasitas = $req->Kapasitas;
        $bus->Bagasi = $req->Bagasi;
        $bus->Harga = $req->Harga;
        $bus->save();

        return redirect('/dataBus');
    }

    public function editDataBus($id)
    {
        $bus = Bus::find(decrypt($id));
        return view('admin.formUpdateBus', compact(
            'bus'
        ));
    // return view('admin.formInputBus');

    }

    public function addUpdateBus(Request $req, $id)
    {
        
        $bus = Bus::find($id);
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
        $bus->Harga = $req->Harga;
        $bus->save();

        return redirect('/dataBus');
    }

    public function deleteBus($id) {
        $bus = Bus::find(decrypt($id))->delete();
         //dd (decrypt($user->password));
        return redirect('/dataBus');
    }
}
