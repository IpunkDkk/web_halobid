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
        Schema::create('pantaubayis', function (Blueprint $table) {
            $table->id();
            $table->integer('bb_bayi');
            $table->integer('tinggi_bayi');
            $table->string('ket_tambahan');
            $table->string('imunisasi');
            $table->string('vitamin');
            $table->unsignedBigInteger('bayi_id');
            $table->timestamps();

            $table->foreign('bayi_id')->references('id')->on('bayis')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pantaubayis');
    }
};
