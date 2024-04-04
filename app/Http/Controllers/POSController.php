<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\m_user;
use Illuminate\Http\Request;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $useri = m_user::all();
        return view('m_user.index', compact('useri'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level = LevelModel::all();
        return view('m_user.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'username' => 'required',
            'nama' => 'required',
        ]); 

        m_user::create($request->all());
        return redirect()->route('m_user.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $useri = m_user::findOrFail($id);
        return view('m_user.show', compact('useri'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $useri = m_user::find($id);
        return view('m_user.edit', compact('useri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user_id' => 'required',
            'nama' => 'required',
            'username' => 'required',
        ]);

        m_user::find($id)->update($request->all());
        return redirect()->route('m_user.index')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $useri = m_user::findOrFail($id)->delete();
        return \redirect()->route('m_user.index')->with('success', 'Data berhasil dihapus.');
    }
}
