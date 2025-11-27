<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('products', function (Blueprint $table) {
        if (!Schema::hasColumn('products', 'cpu')) {
            $table->string('cpu')->nullable();
        }
        if (!Schema::hasColumn('products', 'ram')) {
            $table->string('ram')->nullable();
        }
        if (!Schema::hasColumn('products', 'storage')) {
            $table->string('storage')->nullable();
        }
        if (!Schema::hasColumn('products', 'bandwidth')) {
            $table->string('bandwidth')->nullable();
        }
        if (!Schema::hasColumn('products', 'location')) {
            $table->string('location')->nullable();
        }
        if (!Schema::hasColumn('products', 'os')) {
            $table->string('os')->nullable();
        }

        // HAPUS price, karena sudah ada!
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn([
            'cpu',
            'ram',
            'storage',
            'bandwidth',
            'location',
            'os',
        ]);
    });
}

};
