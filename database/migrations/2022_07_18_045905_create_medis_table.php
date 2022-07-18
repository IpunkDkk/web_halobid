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
        Schema::create('medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bayi_id');
            $table->unsignedBigInteger('petugas_id');
            $table->string('tindakan');
            $table->string('diagnosa');
            $table->timestamps();

            // $table->foreign('bayi_id')->references('id')->on('bayis')->onUpdate('cascade');
            // $table->foreign('petugas_id')->references('id')->on('petugas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medis');
    }
};
