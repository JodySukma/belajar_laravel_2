<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
   // use SoftDeletes;

    protected $table = 'pegawai';

    protected $fillable = ['nama', 'alamat'];

    //protected $dates = ['delete_at'];
}
