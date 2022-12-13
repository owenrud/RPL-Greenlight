<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;
use Illuminate\Support\Facades\Hash;

class DataUserController extends Controller
{
    public function getAllUsers()
    {
        $datas = DataUser::all();

        return view('admin.dataUser', compact(
            'datas'
        ));
    }
    public function create()
    {
        $user = new DataUser;
        return view('admin.formInputUser', compact(
            'user'
        ));
    }

    public function addDataUser(Request $req)
    {
        $user = new DataUser;
        $user->nama = $req->nama;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->tgl_lahir = $req->tgl_lahir;
        $user->alamat = $req->alamat;
        $user->no_telp = $req->no_telp;
        $user->save();

        return redirect('/dataUser');
    }

    public function editDataUser($id)
    {
        $user = DataUser::find($id);
         //dd (decrypt($user->password));
        return view('admin.formUpdateUser', compact(
            'user'
        ));
    }

    public function addUpdateUser(Request $req, $id)
    {
        $user = DataUser::find($id);
        //dd ($user);
        $user->nama = $req->nama;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->tgl_lahir = $req->tgl_lahir;
        $user->alamat = $req->alamat;
        $user->no_telp = $req->no_telp;
        $user->save();

        return redirect('/dataUser');
    }

    // Delete User
    public function deleteUser($id) {
        $user = DataUser::find(decrypt($id))->delete();
         //dd (decrypt($user->password));
        return redirect('/dataUser');
    }
}
