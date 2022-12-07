<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rute;
use App\Models\Bus;

class RuteController extends Controller
{
    public function getAllRuteById($id){
        //dd($id);
        $datarute= Rute::where('id_bus','=',$id)->get();
        $databus= Bus::find($id);
        //dd($databus);
       return view('pemesan.rute',['rute'=>$datarute,'bus'=>$databus]);
    }
}
