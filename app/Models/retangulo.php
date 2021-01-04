<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class retangulo extends Model
{
    protected $fillable = [
        'base',
        'altura',
        'area',
    ];
}
