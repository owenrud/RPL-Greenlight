<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('pemesan.login');
    }
    
    public function check(Request $request){
    
            return redirect('/pilihbooking');
    }

}
