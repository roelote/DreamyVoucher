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
        Schema::create('paxes', function (Blueprint $table) {
            $table->id();
            //$table->integer('paxs_id');
            $table->unsignedBigInteger('voucher_id');
            $table->foreign('voucher_id')->references('id')->on('vouchers');
            $table->string('name');
            $table->string('lastname');
            $table->string('passport');
            $table->string('nationality');
            $table->string('sex');
            $table->string('birth_date');
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
        Schema::dropIfExists('paxes');
    }
};
