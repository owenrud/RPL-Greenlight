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
        $url = url()->previous();
        $route = app('router')->getRoutes($url)->match(app('request')->create($url))->getName();
        
        //dd($url);
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password'=> 'required',
        ]);
        //dd($validator);
        
        // Retrieve the validated input...
        
        $validated = $validator->validated();
        //dd($validated);
         
        if(!Auth::attempt($validated)){
            return redirect('/login');
        }
        else{
            $user = Auth::user();
            if($user->level == 1){
            return redirect()->to($request->input('url'))->with('notif','Login Berhasil!');
            }else{
            return redirect('/adminDashboard');
            }

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
