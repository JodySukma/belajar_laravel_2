<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = DB::table('anggota')->paginate(2);

        return view('index', ['anggota' => $anggota]);
    }

    public function cari(Request $request)
    {
        // menangkap data anggota
        $cari = $request->cari;

        // mengambil data dari tabel anggota sesuai dengan pencarian data
        $member = DB::table('anggota')
            ->where('email', 'like','%'.$cari.'%')
            ->paginate();

        return view('index', ['anggota' => $member]);
    }

    // menampilkan data anggota
    public function tambah()
    {
        return view('tambah');
    }

    // menambah data anggota
    public function store(Request $request)
    {
        // insert data ke dalam tabel anggota
        DB::table('anggota')->insert([
           'nama'=> $request->nama,
            'email'=> $request->email,
            'umur'=> $request->umur
        ]);

        // alihkan ke halaman pegawai
        return redirect('/anggota');
    }

    // method untuk edit data anggota
    public function edit($id)
    {
        // mengambil data anggota berdasarkan id yang dipilih
        $member = DB::table('anggota')->where('id', $id)->get();

        //passing data anggota yang didapat ke view edit.blade.php
        return view('edit', ['anggota' => $member]);
    }

    // mempebaharui data anggota
    public function update(Request $request)
    {
        DB::table('anggota')->where('id', $request->id)->update([
           'nama'=>$request->nama,
            'email'=>$request->email,
            'umur'=>$request->umur
        ]);

        return redirect('/anggota');
    }

    // menghapus data anggota
    public function hapus($id){
        // mengambil data anggota berdasarkan id yang dipilih
        DB::table('anggota')->where('id', $id)->delete();

        return redirect('/anggota');
    }
}
