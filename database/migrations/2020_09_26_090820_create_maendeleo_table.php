<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaendeleoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maendeleo', function (Blueprint $table) {
        
            $table->id();
            $table->string('amount_in_figures');
            $table->string('amount_in_words');
            $table->string('months');
            $table->string('phase');
            $table->string('total');
            $table->string('purpose');
            $table->string('collateral');
            $table->string('creditor');
            $table->string('creditor_Address');
            $table->string('creditor_amount');
            $table->string('mdhamini1');
            $table->string('mdhamini2'); 
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maendeleo');
    }
}
