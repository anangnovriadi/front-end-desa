<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{   
    protected $table = 'front_maps';

    protected $fillable = ['id', 'embed_url'];
}
