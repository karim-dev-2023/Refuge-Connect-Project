<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $fillable = ['name', 'species', 'age', 'description', 'photo'];

    protected $casts = [
        'age' => 'integer',
    ];
}
