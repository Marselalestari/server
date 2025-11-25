<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVpsRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('vps_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('server_name')->nullable();
            $table->string('cpu');
            $table->string('ram');
            $table->string('storage');
            $table->string('os');
            $table->string('lokasi');
            $table->text('keterangan')->nullable();
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->string('assigned_ip')->nullable(); // untuk nanti diisi admin
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vps_requests');
    }
}
