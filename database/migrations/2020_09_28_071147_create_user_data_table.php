<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id()->nullable();
            $table->foreign('id')->references('id')->on('users');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('work');
            $table->string('location');
            $table->string('gender');
          
            $table->string('street');
            $table->string('status');
            $table->string('bond');
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
        Schema::dropIfExists('user_data');
    }
}
