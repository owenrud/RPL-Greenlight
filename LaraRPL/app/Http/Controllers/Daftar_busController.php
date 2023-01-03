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
use App\Models\Rute;

class Daftar_busController extends Controller
{
    public function getAllBus(Request $req)
    {
        
        $databus = Bus::all();
   
        //dd($datarute);
        return view('pemesan.home_pemesan', ['datas'=>$databus]);
    }

    public function details_bus($id){
        $dbus = Bus::find($id);
        //Session::set('id_bus',$dbus->id);
       return view('pemesan.details',['bus'=>$dbus]);
    }
    /*public function list_booking(Request $request){
        $id = $request->input('id_bus');
        $databus = Bus::find($id);
       return view('pemesan.list_booking',['bus'=>$databus]);
    }*/
    public function booking(Request $request){
        $id = $request->input('id');
        $id_rute = $request->input('id_rute');
        $databus = Bus::find($id);
        //dd($id_rute);
        $datauser = Auth::user();
        $datarute= Rute::where('id_bus','=',$id)->where('id','=',$id_rute)->get();
        //dd($datarute);
        return view('pemesan.booking',['bus'=>$databus,'user'=>$datauser,'rute'=>$datarute]);
    }
    public function personal_booking(Request $request){
        $id = $request->input('id');
        $id_rute = $request->input('id_rute');
        $databus = Bus::find($id);
        $datainvo = Invoice::where('id_bus_invoice','=',$databus->id)->get();
        $datarute = Rute::where('id_bus','=',$id)->where('id','=',$id_rute)->get();
        $kapasitas = $databus->Kapasitas;
        $jum = 0;
        $tersedia = $databus->Kapasitas;
        foreach($datainvo as $items){
            if($items->sifat == "Pribadi"){
        $jum = $jum + $items->jmlh_kursi;
        $tersedia = $kapasitas - $jum;
            }
        }
       
       //dd($tersedia);
       //dd(is_array($kursi));
        //dd(!in_array("S10",$kursi));
        $datauser = Auth::user();
        if($tersedia !== 0){
        return view('pemesan.personal_booking',['bus'=>$databus,'user'=>$datauser,'stock'=>$tersedia,'rute'=>$datarute]);
        }else{
            return redirect("/home")->with('message',"Bus yang Dipilih, Tidak Tersedia Kursi");
        }
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
        $dbus = Bus::find($request->id);
        $sifat = $dbus->Sifat;
        $area = $dbus->Area;
        $harga = $dbus->harga;
        $kapasitas = $dbus->Kapasitas;
        $harga_kursi = $harga / $kapasitas;
        $kursi = $request->jmlh_kursi;
        if($sifat == 'Pribadi'){
        $hrg =round($kursi * $harga_kursi,0) ;
        }else{
            $hrg = $harga;
        }
        $data = $request->all();
        //dd($data);
        $datauser = Auth::user();
        $uniq_invo = Str::random(5);
        
        
         
        
        return view('pemesan.invoice',['databook'=>$data,'user'=>$datauser])->with('invo',$uniq_invo)->with('area',$area)->with('harga',$hrg)->with('sifat',$sifat);
    }
    public function upload(Request $req){
        $data = $req->all();
        //dd($data);
        
        
        $fileName = Auth::user()->nama.'.'.$req->bukti_bayar->extension();  
        //dd($fileName);
   
        $req->bukti_bayar->move(public_path('invoice-images'), $fileName);
        //dd($fileName);
        $jmlh_bus = $req->input("jumlah_bus");
        //dd($jmlh_bus);
        if(isset($jmlh_bus)){
            $jmlh_bus = $req->input("jumlah_bus");
        }else{
            $jmlh_bus = 1;
        }
        //dd($jmlh_bus);
        $jmlh_kursi = $req->input("jumlah_kursi");
        if(isset($jmlh_kursi)){
            $jmlh_kursi = $req->input("jumlah_kursi");
        }else{
            $dbus = Bus::find($req->id);
            $jmlh_kursi = $dbus->Kapasitas * $jmlh_bus;
        }
        //dd($jmlh_kursi);
        
        DB::table('invoice')->insert([
            'kode_invoice'=>$req->input('kode_invoice'),
            'email'=>$req->input('email'),
            'tgl_cetak'=>now()->todatestring(),
            'tipe_bayar'=>$req->input('tipe_bayar'),
            'no_bayar'=>$req->input('no_bayar'),
            'id_bus_invoice'=>$req->id,
            'area'=>$req->area,
            'sifat'=>$req->sifat,
            'tgl_pickup'=>$req->input('tgl'),
           'berangkat'=>$req->input('berangkat'),
           'sampai'=>$req->input('sampai'),
            'lokasi'=>$req->input('lok_pickup'),
            'tujuan'=>$req->input('tujuan'),
            'jmlh_kursi'=>$jmlh_kursi,
            'jmlh_bus'=>$jmlh_bus,
            'harga'=>$req->input('harga'),
            'file'=>$fileName,
        ]);

        return redirect('/home')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);


    }
    public function order_history(){
        $dinvoice = Invoice::all();
        //dd($dinvoice);
        //Session::set('id_bus',$dbus->id);
       return view('pemesan.shop_cart',['invoice'=>$dinvoice]);
    }
}
