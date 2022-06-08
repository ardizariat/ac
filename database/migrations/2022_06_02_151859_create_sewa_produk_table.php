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
            $table->uuid('id')->primary()->unique();
            $table->uuid('kategori_id')->nullable();
            $table->string('nama');
            $table->bigInteger('tarif_harian')->nullable();
            $table->bigInteger('tarif_mingguan')->nullable();
            $table->bigInteger('tarif_bulanan')->nullable();
            $table->bigInteger('tarif_tahunan')->nullable();
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
