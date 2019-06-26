<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $table = 'front_youtubes';

    protected $fillable = [
        'embed_url'
    ];
}
