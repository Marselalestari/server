<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'cpu', 'ram', 'storage', 'price'];

    // Mutator: otomatis hitung harga saat dibuat / diupdate
    public static function booted()
    {
        static::saving(function ($product) {
            $product->price = self::calculatePrice($product->cpu, $product->ram, $product->storage);
        });
    }

    // Fungsi logika harga
    public static function calculatePrice($cpu, $ram, $storage)
    {
        $basePrice = 10000; // harga dasar per unit
        $cpuPrice = 5000 * $cpu;       // harga per core CPU
        $ramPrice = 3000 * $ram;       // harga per GB RAM
        $storagePrice = 200 * $storage; // harga per GB Storage

        return $basePrice + $cpuPrice + $ramPrice + $storagePrice;
    }
}
