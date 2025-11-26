<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'cpu',
        'ram',
        'storage',
        'bandwidth',
        'price',
        'description',

    ];
}
