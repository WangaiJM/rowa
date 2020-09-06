<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('motor_id')->unsigned();
            $table->string('added_on');
            $table->string('expires_on');
            // $table->date('expires_on')->default(date_add(now(), date_interval_create_from_date_string('1 Year')));
            $table->integer('premium');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurances');
    }
}
