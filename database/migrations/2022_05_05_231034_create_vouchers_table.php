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
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('number_voucher');
            $table->string('name_package');
            $table->string('name_pax');
            $table->string('email');
            $table->string('phone');
            $table->string('date_package');
            $table->string('language');
            $table->string('currency');
            $table->string('price');
            $table->string('advancement');
            $table->string('date_advancement');
            $table->string('debt');
            //$table->integer('paxs_id');
            $table->text('Message');
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
        Schema::dropIfExists('vouchers');
    }
};
