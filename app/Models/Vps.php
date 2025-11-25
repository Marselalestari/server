<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vps extends Model
{
    use HasFactory;

    protected $fillable = [
'nama_vps',
        'ip_address',
        'username',
        'password',
        'lokasi_server',
        'tanggal_aktif',
        'tanggal_expired',
        'status',
        'user_id',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
