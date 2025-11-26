<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            // Nama paket VPS
            $table->string('name');

            // Spesifikasi VPS
            $table->integer('cpu');        // CPU Core
            $table->integer('ram');        // RAM (GB)
            $table->integer('storage');    // SSD Storage (GB)
            $table->string('bandwidth');   // Unlimited / 1 TB / 5 TB

            // Harga VPS per bulan
            $table->integer('price');

            // Keterangan tambahan
            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
