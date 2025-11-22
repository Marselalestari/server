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
        Schema::create('vps_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
        $table->string('cpu');
        $table->string('ram');
        $table->string('storage');
        $table->string('os');
        $table->string('lokasi');
        $table->text('keterangan')->nullable();
        $table->enum('status', ['pending', 'approved', 'rejected'])
              ->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vps_requests');
    }
};
