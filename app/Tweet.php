<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Eloquent
{
    protected $fillable = ['tweet', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
