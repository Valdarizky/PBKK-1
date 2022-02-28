<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('formulir');
    }

    public function valid(Request $request)
    {
       $Error = [
        'required' => ':Wajiib Diisi!!',
        'min' => ':harus diisi minimal :min karakter',
        'max' => ':melebihi batas maksimal (:max)',
        'numeric' => 'Karakter yang harus dimasukan adalah berupa angka',
        'mimes' => 'File yang dimasukan harus berupa png dan jpg (dan variannya)',
       ];

       $this->validate($request, [
        'nama' => 'required|max:50',
        'nrp' => 'required|numeric',
        'departemen' => 'required',
        'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
        'ipk' => 'required|numeric|min:2.50|max:99.99',
    ], $Error);

    $filename=time().".".$request->gambar->extension();
    $request->gambar->move(public_path('images'), $filename);
    $request->gambar = $filename;

    session()->flash('success','Input Data Berhasil!');
    return view('proses',['data' => $request]);
    }
}