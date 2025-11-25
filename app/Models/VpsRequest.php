<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VpsRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'server_name',
        'cpu',
        'ram',
        'storage',
        'os',
        'lokasi',
        'keterangan',
        'status',
        'assigned_ip',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
