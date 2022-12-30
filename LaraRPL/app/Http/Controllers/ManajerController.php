<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Rute;

class ManajerController extends Controller
{
    public function getAllData()
    {
        $datainvoice = Invoice::all();
        $incomplete = $datainvoice->where('status','=',0);
        $complete = $datainvoice->where('status','=',1);
        $pribadi = $datainvoice->where('sifat','=','Pribadi');
        $instansi = $datainvoice->where('sifat','=','Instansi');
        //dd($instansi);
        return view('manajer.dashboard',compact('incomplete','complete','pribadi','instansi'));
    }

    public function getReportDay(Request $req)
    {
        $input = $req->all();
        
        if($input){
            
            $tgl = $req->from_tgl;
            //dd($tgl);
            $datainvoice = Invoice::where(['tgl_cetak'=>$tgl,'status'=>1])->get();
            //$datainvoice = Invoice::all();
            //$tgl_invo = $datainvoice->tgl_cetak;
            
            //dd($datainvoice);
            return view('manajer.transc_harian',compact('datainvoice'));
        }
        
        
        //dd($datainvoice);
        return view('manajer.transc_harian');
    }
    public function getReportRoute(Request $req)
    {
        $input = $req->all();
        
        if($input){
            
            $tgl = $req->from_tgl;
            //dd($tgl);
            $datarute = Rute::select('titik_awal')->groupBy('titik_awal')->get();
            $datainvoice = Invoice::where('lokasi',$tgl)->get();
            //$datainvoice = Invoice::all();
            //$tgl_invo = $datainvoice->tgl_cetak;
            
            //dd($datainvoice);
            return view('manajer.transc_route',compact('datainvoice','datarute'));
        }
        
        $datarute = Rute::select('titik_awal')->groupBy('titik_awal')->get();
        //dd($datarute);
        return view('manajer.transc_route',compact('datarute'));
    }
}
