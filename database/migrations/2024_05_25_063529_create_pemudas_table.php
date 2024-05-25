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
        Schema::create('pemudas', function (Blueprint $table) {
            $table->id();

            $table->string('nama_depan');
            $table->string('nama_tengah')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('gambar')->nullable();
            
            // relation with : wilayah, gereja
            // $table->bigInteger('gereja_id')->nullable()

            // crated_at, updated_at, published_at, deleted_at
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
        Schema::dropIfExists('pemudas');
    }
};
