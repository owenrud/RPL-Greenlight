<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

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
}
