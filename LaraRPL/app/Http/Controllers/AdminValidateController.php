<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Mail\Notification;
use App\Models\Invoice;

class AdminValidateController extends Controller
{
    public function list_validasi(){
        $dinvo = Invoice::all();
        //Session::set('id_bus',$dbus->id);
       return view('admin.validatePribadi',['invoice'=>$dinvo]);
    }
    public function list_validasi_instansi(){
        $dinvo = Invoice::all();
        //Session::set('id_bus',$dbus->id);
       return view('admin.validateInstansi',['invoice'=>$dinvo]);
    }

    public function details_validate($id){
        $dinvo = Invoice::find($id);
        //dd($dinvo);
        return view('admin.details_validate',['invoice'=>$dinvo]);
    }

    public function validate_accept(Request $request){
        
        $dinvo = Invoice::find($request->id);
        $dinvo->status = $request->status;
        $dinvo->save();
        $email= $dinvo->email;
        $notification = new Notification($dinvo);
        $notification->email = $email;

        if($notification){
            Mail::to($email)->send(new Notification($dinvo));
        }

        //dd($dinvo);
        return redirect('/adminDashboard');
    }

    public function validate_reject($id){
        
        $dinvo = Invoice::find($id)->delete();



        //dd($dinvo);
        return redirect('/adminDashboard');
    }
}
