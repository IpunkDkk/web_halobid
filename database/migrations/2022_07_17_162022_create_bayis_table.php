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
        Schema::create('bayis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('jk_bayi');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('anak_ke');
            $table->string('brt_lahir');
            $table->string('pjg_lahir');
            $table->string('usia');

            // $table->string('brt_sekarang');
            // $table->string('pjg_sekarang');
            $table->string('ket_pemeriksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayis');
    }
};
