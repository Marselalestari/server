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
        Schema::create('vps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vps');
            $table->string('ip_address');
            $table->string('username');
            $table->string('password');
            $table->string('lokasi_server')->nullable();
            $table->date('tanggal_aktif');
            $table->date('tanggal_expired');
            $table->string('status')->default('aktif'); // aktif / suspend / mati
            $table->unsignedBigInteger('user_id'); // pemilik VPS
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vps');
    }
};
