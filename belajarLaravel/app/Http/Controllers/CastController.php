<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nama_cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nama_cast = nama_cast::all();
        
        return view('nama_cast.tampil', ['nama_cast' => $nama_cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nama_cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required|integer|min:0',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 5 karakter',
            'umur.required' => 'Umur tidak boleh kosong',
            'umur.integer' => 'Umur harus berupa angka',
        ]);

        $nama_cast = new nama_cast;
 
        $nama_cast->nama = $request->input('nama');
        $nama_cast->umur = $request->input('umur');
        $nama_cast->bio = $request->input('bio');

        $nama_cast->save();
 
        return redirect('/nama_cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nama_cast = nama_cast::find($id);

        return view('nama_cast.detail', ['nama_cast' => $nama_cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nama_cast = nama_cast::find($id);

        return view('nama_cast.edit', ['nama_cast' => $nama_cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:5',
            'umur' => 'required|integer|min:0',
            'bio' => 'required',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'nama.min' => 'Nama minimal 5 karakter',
            'umur.required' => 'Umur tidak boleh kosong',
            'umur.integer' => 'Umur harus berupa angka',
        ]);
    
        nama_cast::where('id', $id)
      ->update([
        'nama' => $request->input('nama'),
        'umur' => $request->input('umur'),
        'bio' => $request->input('bio'),
    ]);
    return redirect('/nama_cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        nama_cast::where('id', $id)->delete();

        return redirect('/nama_cast');
    }
}
