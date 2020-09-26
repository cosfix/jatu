<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->string('saving');
            $table->string('bond');
            $table->string('successor_name');
            $table->string('successor_phone');
            $table->string('member_id');
            $table->string('business');
            $table->string('place');
            $table->string('day_income');
            $table->string('month_income');
            $table->string('amount');
            $table->string('reason');
            $table->string('month_payment');
            $table->string('payment_phase');
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
        Schema::dropIfExists('emergencies');
    }
}
