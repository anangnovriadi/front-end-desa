<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $fillable = [
        'name', 'img_thumb', 'jabatan', 'status_kepala'
    ];
}
