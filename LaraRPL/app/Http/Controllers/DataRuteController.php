<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
use App\Models\Bus;

class DataRuteController extends Controller
{
    public function getAllRutes()
    {
        $datas = Rute::all();

        return view('admin.dataRute', compact(
            'datas'
        ));
    }
    public function create()
    {
        $dbus = Bus::all();
        return view('admin.formInputRute', compact(
            'dbus',
        ));
    }

    public function addDataRute(Request $req)
    {

        $rute = new Rute;
        $rute->id_bus = $req->id_bus;
        $rute->titik_awal = $req->titik_awal;
        $rute->titik_sampai = $req->titik_sampai;
        $rute->jam_berangkat = $req->berangkat;
        $rute->jam_sampai = $req->sampai;
        $rute->save();

        return redirect('/dataRute');
    }

    public function editDataRute($id)
    {
        $rute = Rute::find($id);
         //dd (decrypt($rute->password));
        return view('admin.formUpdateRute', compact(
            'rute'
        ));
    }

    public function addUpdateRute(Request $req, $id)
    {
        $rute = Rute::find($id);
        //dd ($rute);
        $rute->id_bus = $req->id_bus;
        $rute->titik_awal = $req->titik_awal;
        $rute->titik_sampai = $req->titik_sampai;
        $rute->jam_berangkat = $req->berangkat;
        $rute->jam_sampai = $req->sampai;
        $rute->save();

        return redirect('/dataRute');
    }

    // Delete rute
    public function deleteRute($id) {
        $rute = Rute::find(decrypt($id))->delete();
         //dd (decrypt($rute->password));
        return redirect('/dataRute');
    }
}
