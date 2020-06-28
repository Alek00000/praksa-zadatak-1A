<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podniz extends Model
{
    protected $fillable=[
        'niz_a',
        'niz_b',
        'uzastopni',
    ];

    protected $casts = [
        'niz_a' => 'array',
        'niz_b' => 'array'
    ];
}
