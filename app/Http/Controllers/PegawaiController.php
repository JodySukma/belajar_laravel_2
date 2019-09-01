<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Memanggil Model pegawao
use App\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil semua data pegawai
         $pegawai = Pegawai::all();

        // mengambil data pertama pegawai
        // $pegawai = Pegawai::first();

        // mengambil berdasarkan ID
        // $pegawai = Pegawai::find(2);

        // mengambil data dengan seleksi Where
        // $pegawai = Pegawai::where('nama', 'Belinda Mardhiyah');

        // mengambil data pegawai yang lebih besar dari pada 10
        // $pegawai = Pegawai::where('id', '>', 10);

        // mengambil data pegawai yang namanya huruf a
        // $pegawai = Pegawai::where('nama', 'like', '%a%');

        // menampilkan 5 data pegawai per halaman
        // $pegawai = Pegawai::paginate(3);

        // mengirim data pegawai ke view pegawai
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('pegawai_tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/pegawai');
    }

    public function edit($id){
        $pegawai = Pegawai::find($id);

        return view('pegawai_edit', ['pegawai' => $pegawai]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
           'nama' => 'required',
            'alamat' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/pegawai');
    }
}
