<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasis', function (Blueprint $table) 
        {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('bidan_id');
            $table->unsignedBigInteger('layanan_id');
            $table->string('keluhan');
            $table->string('saran');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pasiens')->onUpdate('cascade');
            $table->foreign('bidan_id')->references('id')->on('bidans')->onUpdate('cascade');
            $table->foreign('layanan_id')->references('id')->on('layanans')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konsultasis');
    }
};
