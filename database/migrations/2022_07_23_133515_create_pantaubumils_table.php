<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantaubumils', function (Blueprint $table) {
            $table->id();
            $table->integer('tensi');
            $table->integer('bb');
            $table->integer('usia');
            $table->string('ket_pemeriksaan');
            $table->unsignedBigInteger('bumil_id');
            $table->timestamps();

            $table->foreign('bumil_id')->references('id')->on('bumils')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pantaubumils');
    }
};
