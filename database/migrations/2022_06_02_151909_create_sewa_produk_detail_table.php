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
        Schema::create('sewa_produk_detail', function (Blueprint $table) {
            $table->uuid('id')->primary()->unique();
            $table->uuid('sewa_produk_id')->nullable();
            $table->string('foto')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->text('kegunaan')->nullable();
            $table->text('fasilitas')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('sewa_produk_id')->references('id')->on('sewa_produk')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewa_produk_detail');
    }
};
