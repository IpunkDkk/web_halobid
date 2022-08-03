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
        Schema::create('bidans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidan');
            $table->string('alamat');
            $table->string('no_str');
            $table->string('no_hp');
            $table->string('pendidikan');
            $table->unsignedBigInteger('posyandu_id');
            $table->foreign('posyandu_id')->references('id')->on('posyandus')->onUpdate('CASCADE');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('bidans');
    }
};
