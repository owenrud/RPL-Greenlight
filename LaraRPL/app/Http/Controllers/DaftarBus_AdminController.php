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
}
