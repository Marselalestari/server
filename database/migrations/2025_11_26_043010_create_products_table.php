<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            // Spesifikasi VPS
            $table->integer('cpu')->default(1);
            $table->integer('ram')->default(1);
            $table->integer('storage')->default(10);
            $table->integer('bandwidth')->default(1);

            // Harga otomatis
            $table->integer('price')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

