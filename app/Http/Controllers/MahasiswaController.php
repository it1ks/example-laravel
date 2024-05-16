<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Resources\MahasiswaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa=MahasiswaResource::collection(Mahasiswa::all());
        return Inertia::render('Mahasiswa/Index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Mahasiswa/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'npm'=> $request->npm,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,
            'semester'=> $request->semester,
        ]);
     return Redirect::route('mahasiswa.index')->with('message', 'Data berhasil ditambahkan.');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {

        return Inertia::render('Mahasiswa/Edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'npm'=> $request->npm,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,
            'semester'=> $request->semester,
        ]);
        
        return Redirect::route('mahasiswa.index')->with('message', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {

        $mahasiswa->delete();
        return back();

        return Redirect::back()->with('message', 'Data berhasil di hapus.');
    }
}