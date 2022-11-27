<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bus;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Invoice;

class Daftar_busController extends Controller
{
    public function details_bus($id){
        $dbus = Bus::find($id);
        //Session::set('id_bus',$dbus->id);
       return view('pemesan.details',['bus'=>$dbus]);
    }
    public function list_booking(Request $request){
        $id = $request->input('id_bus');
        $databus = Bus::find($id);
       return view('pemesan.list_booking',['bus'=>$databus]);
    }
    public function booking(Request $request){
        $id = $request->input('id');
        $databus = Bus::find($id);
        $datauser = Auth::user();
        return view('pemesan.booking',['bus'=>$databus,'user'=>$datauser]);
    }
    public function personal_booking(Request $request){
        $id = $request->input('id');
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
        $data = $request->all();
        //dd($data);
        $datauser = Auth::user();
        $uniq_invo = Str::random(5);
        
        
         
        
        return view('pemesan.invoice',['databook'=>$data,'user'=>$datauser])->with('invo',$uniq_invo);
    }
    public function upload(Request $req){
        $data = $req->all();
        //dd($data);
        
        
        $fileName = time().'.'.$req->bukti_bayar->extension();  
   
        $req->bukti_bayar->move(public_path('storage'), $fileName);
        //dd($fileName);
        $seat = null;
        if(isset($seat)){
            $seat = $req->input("seat");
        }else{
            $seat = null;
        }
        //dd($seat);
        
        DB::table('invoice')->insert([
            'kode_invoice'=>$req->input('kode_invoice'),
            'email'=>$req->input('email'),
            'tgl_cetak'=>now(),
            'tipe_bayar'=>$req->input('tipe_bayar'),
            'no_bayar'=>$req->input('no_bayar'),
            'nama_bus'=>$req->input('nama_bus'),
            'tgl_pickup'=>$req->input('tgl'),
           'waktu'=>$req->input('waktu'),
            'lokasi'=>$req->input('lok_pickup'),
            'tujuan'=>$req->input('tujuan'),
            'kursi'=>$req->input('seat'),
            'harga'=>$req->input('harga'),
            'file'=>$fileName,
        ]);

        return redirect('/home')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);


    }
    public function order_history(){
        $dinvoice = Invoice::all();
        //Session::set('id_bus',$dbus->id);
       return view('pemesan.shop_cart',['invoice'=>$dinvoice]);
    }
}
