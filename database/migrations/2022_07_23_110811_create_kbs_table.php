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
        Schema::create('kbs', function (Blueprint $table) {
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
            $table->integer('jml_anak');
            $table->string('tensi');
            $table->string('bb');
            $table->string('akseptor');
            $table->string('ket_pemeriksaan');
            $table->timestamps();
            $table->unsignedBigInteger('posyandu_id');
            $table->foreign('posyandu_id')->references('id')->on('posyandus')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kbs');
    }
};
