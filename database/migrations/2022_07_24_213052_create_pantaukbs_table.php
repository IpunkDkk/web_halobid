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
        Schema::create('pantaukbs', function (Blueprint $table) {
            $table->id();
            $table->string('tensi_kb');
            $table->string('bb_kb');
            $table->string('akseptor_kb');
            $table->string('ket_tambahan');
            $table->unsignedBigInteger('kb_id');
            $table->timestamps();

            $table->foreign('kb_id')->references('id')->on('kbs')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pantaukbs');
    }
};
