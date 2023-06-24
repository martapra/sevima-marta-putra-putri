<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    protected $table = 'portf';
    protected $fillable = [
        'image', 'desk',
    ];

    protected $hidden = [

    ];
}
