<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommiteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commitees', function (Blueprint $table) {
            $table->id();
            $table->string('interest');
            $table->string('description')->nullable();
            $table->string('status');
            $table->string('chair');
            $table->string('secretary');
            $table->string('messenger');
            $table->string('loan_officer');
            $table->date('receive_date');
            $table->date('start_day');
            $table->date('end_day');
            $table->date('month_interest');
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
        Schema::dropIfExists('commitees');
    }
}
