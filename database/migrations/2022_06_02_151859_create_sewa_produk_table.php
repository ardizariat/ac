<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa_produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->bigInteger('harian')->nullable();
            $table->bigInteger('mingguan')->nullable();
            $table->bigInteger('bulanan')->nullable();
            $table->bigInteger('tahunan')->nullable();
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategori')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewa_produk');
    }
};
