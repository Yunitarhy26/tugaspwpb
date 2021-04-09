<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function Tambahsiswa()
    {
    	return view('siswa.tambah-siswa');	
    }

    public function savesiswa(Request $Request) 
    {
        Siswa::create([
            'name'=> $Request->nama,
            'kelas'=> $Request->kelas,
            'alamat'=> $Request->alamat,
        ]);
        return redirect()->route('daftar.siswa');
    }


    public function Daftarsiswa() 
    {
        return view ('siswa.daftar-siswa',[
            'data' => Siswa::get(),
        ]);
    }

    public function edit($id){
        return view('siswa.edit', [
            'siswa' => Siswa::where('id', $id)->first(),
        ]);
    }
    public function update(Request $request, $id)
    {
        $siswa = Siswa::where('id' ,$id)->first();
        $siswa->update([
            'name'=> $request->nama,
            'kelas'=> $request->kelas,
            'alamat'=> $request->alamat,
        ]);
        return redirect()->route('daftar.siswa');
    }
    public function delete($id)
    {
        $siswa = Siswa::where('id' ,$id)->first();
        $siswa->delete();
        return back();
    }
}