<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vps extends Model
{
    protected $fillable = ['user_id', 'name', 'cpu', 'ram', 'disk', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
