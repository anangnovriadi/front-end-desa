<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Potensi extends Model
{   
    protected $table = 'front_potensis';

    protected $fillable = ['name', 'info', 'img_thumb'];
}
