<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_name' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        KategoriModel::where('kategori_id',$id)->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_name' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function destroy($id)
    {
        KategoriModel::destroy($id);
        return redirect('/kategori');
    }
}
