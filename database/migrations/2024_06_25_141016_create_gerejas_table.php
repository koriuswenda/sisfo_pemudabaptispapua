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
        Schema::create('gerejas', function (Blueprint $table) {
            $table->id();

            $table->string('nama_gereja');
            $table->string('kota_kab_id')->nullable();
            $table->string('alamat')->nullable();
            $table->mediumText('keterangan')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerejas');
    }
};
