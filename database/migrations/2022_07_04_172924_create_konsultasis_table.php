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
            // $table->string('judul_konsultasi');
            // $table->string('isi_pesan');
            $table->unsignedBigInteger('bidan_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('bidan_id')->references('id')->on('bidans')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
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
