<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function create(){
        return view('add-karyawan');
    }

    public function store(Request $request){
        karyawan::create([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Telepon' => $request->Telepon,

        ]);

        return redirect('/home');
    }

    public function index(){
        $karyawans = karyawan::all();

        return view ('welcome', compact('karyawans'));
    }

    public function show($id){
        $karyawan = karyawan::find($id);

        return view('show-det-karyawan', compact('karyawan'));

    }

    public function edit($id){

        $karyawan = karyawan::findOrFail($id);
        return view('edit-karyawan', compact('karyawan'));
    }

    public function update(Request $request, $id){
        karyawan::findOrFail($id)->update([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Telepon' => $request->Telepon,
        ]);
        return redirect('/home');
    }

    public function delete($id){
        karyawan::destroy($id);

        return redirect('/home');

    }
}
