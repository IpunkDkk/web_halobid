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
        Schema::create('persalinans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->integer('umur_ibu');
            $table->string('alamat_ibu');
            $table->string('pekerjaan_suami');
            $table->integer('anak_ke');
            $table->string('usia_hamil');
            $table->date('tgl_lahir_anak');
            $table->string('lama_jam');
            $table->string('keselamatan');
            $table->integer('bb_anak');
            $table->string('jk_anak');
            $table->string('ket_persalinan');
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
        Schema::dropIfExists('persalinans');
    }
};
