<?php

namespace App\Http\Controllers;


use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $user = UserModel::with('level')->get();
        return view('user.user', ['data' => $user]);
    }
    public function tambah() {
        return view('user_tambah');
    }
    public function tambah_simpan(Request $request) {
        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/user');
    }
    public function ubah($id) {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    function ubah_simpan( $id, Request $request) {
        $user = UserModel::find($id);
        $user->level_id = $request->level_id;
        $user->username = $request->username;
        $user->nama = $request->nama;

        $user->save();
        return redirect('/user');
    }
    function hapus($id) {
        $user = UserModel::find($id);
        $user->delete();
        return redirect('/user');
    }
    
}