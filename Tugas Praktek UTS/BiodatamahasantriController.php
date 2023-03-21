<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BiodatamahasantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dapatkan seluruh data pegawai dengan query builder
        $ar_biodatamahasantri = DB::table('biodatamahasantri')->get();
        //arahkan ke halaman baru dengan menyertakan data pegawai(compact)
        //di resources/views/pegawai/index.blade.php
        return view('biodatamahasantri.index', compact('ar_biodatamahasantri'));
    }

    public function jurusan()
    {
        return view('biodatamahasantri.jurusan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodatamahasantri.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nim'=>'required|unique:biodatamahasantri|numeric'
                ,
                'nama'=>'required|max:50',
                'jurusan'=>'required|max:50',
                'alamat'=>'required',
                'kota'=>'required|max:50',
                'provinsi'=>'required|max:50',
                'email'=>'required|max:50|unique:biodatamahasantri|regex:/(.+)@(.+)\.(.+)/i',
            ],
            [
                    'nim.required'=>'NIM Wajib di Isi',
                    'nim.unique'=>'NIM Tidak Boleh Sama',
                    'nim.numeric'=>'Harus Berupa Angka',
                    'nama.required'=>'Nama Wajib di Isi',
                    'jurusan.required'=>'Jurusan Wajib di Isi',
                    'alamat.required'=>'Alamat Wajib di Isi',
                    'kota.required'=>'Asal Kota Wajib di Isi',
                    'provinsi.required'=>'Asal Provinsi Wajib di Isi',
                    'email.required'=>'Email Wajib di Isi',
                    'email.unique'=>'Email Tidak Boleh Sama',
                    'email.regex'=>'Harus berformat email',
            ],
            );
            DB::table('biodatamahasantri')->insert(
                [
                    'nim'=>$request->nim,
                    'nama'=>$request->nama,
                    'jurusan'=>$request->jurusan,
                    'alamat'=>$request->alamat,
                    'kota'=>$request->kota,
                    'provinsi'=>$request->provinsi,
                    'email'=>$request->email,
                ]
            );
            
            return redirect('/biodatamahasantri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
