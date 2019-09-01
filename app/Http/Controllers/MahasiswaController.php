<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    // nampilin data mahasiswa
    
    
    return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
}
