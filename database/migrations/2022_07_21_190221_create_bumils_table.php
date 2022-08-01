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
        Schema::create('bumils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->string('nik');
            $table->string('kk');
            $table->string('status');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('suami');
            $table->integer('anak_ke');
            $table->integer('bb');
            $table->integer('tensi');
            $table->integer('usia_hamil');
            $table->string('catatan_pemeriksaan');
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
        Schema::dropIfExists('bumils');
    }
};
