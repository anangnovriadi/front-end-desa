<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'header_top', 'logo_kanan_atas', 'alamat_bottom', 'author'
    ];
}
