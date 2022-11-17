<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bus;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Daftar_busController extends Controller
{
    public function details_bus($id){
        $dbus = Bus::find($id);
        //Session::set('id_bus',$dbus->id);
       return view('pemesan.details',['bus'=>$dbus]);
    }
    public function list_booking(Request $request){
        $id = $request->input('id_bus');
       return view('pemesan.list_booking',['id'=>$id]);
    }
    public function booking($id){
        $databus = Bus::find($id);
        $datauser = Auth::user();
        return view('pemesan.booking',['bus'=>$databus,'user'=>$datauser]);
    }
    public function personal_booking($id){
        $databus = Bus::find($id);
        $datauser = Auth::user();
        return view('pemesan.personal_booking',['bus'=>$databus,'user'=>$datauser]);
    }
    public function invoice(Request $request){
        /*$id = $request->id;
       $nama_b = $request->nama_bus;
        $nama = $request->nama_user;
        $email = $request->email;
        $telp = $request->no_telp;
        $a = $request->email;
        $id = $request->id;
        $email = $request->email;*/
        $data = $request->post();

        $datauser = Auth::user();
        $uniq_invo = Str::random(5);
        //dd($data);
        return view('pemesan.invoice',['databook'=>$data,'user'=>$datauser])->with('invo',$uniq_invo);
    }
    public function upload(Request $req){
        //dd($req);
        
        $fileName = time().'.'.$req->bukti_bayar->extension();  
   
        $req->bukti_bayar->move(public_path('storage'), $fileName);
   
        return redirect('/home')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);


    }
}
