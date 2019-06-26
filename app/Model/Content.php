<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'front_contents';

    protected $fillable = [
        'header_top', 'logo_kanan_atas', 'alamat_bottom', 'author'
    ];
}
