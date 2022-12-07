<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('pemesan.login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/home')->with('notif','Logout Berhasil!');
    }
    
    public function check(Request $request){
        
        //dd($password);
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password'=> 'required',
        ]);
        //dd($validator);
        
        // Retrieve the validated input...
        
        $validated = $validator->validated();
        //dd($validated);
         //dd(encrypt($validated['password']));
        if(!Auth::attempt($validated)){
            return redirect('/login');
        }
        else{
            return redirect()->to($request->input('url'))->with('notif','Login Berhasil!');
        }
            
    }
    public function saveuser(Request $request){
        $user = User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_telp'=>$request->no_telp,
            'alamat'=>$request->alamat,
            'tgl_lahir'=>$request->tgl_lahir,
            'password'=>bcrypt($request->password)
        ]);
        
        return redirect('/login')->with('notif','Register Berhasil!');
    }
}
