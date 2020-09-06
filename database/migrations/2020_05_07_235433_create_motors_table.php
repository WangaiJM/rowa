<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->string('log_book_no');
            $table->string('registration')->unique();
            $table->string('chassis');
            $table->string('make');
            $table->string('model');
            $table->string('type');
            $table->string('body');
            $table->string('fuel');
            $table->string('main_year');
            $table->integer('rating')->unsigned();
            $table->string('engine_number');
            $table->string('color');
            $table->string('reg_date')->nullable();
            $table->integer('gross_weight')->nullable();
            $table->integer('no_of_prev_owners')->unsigned();
            $table->integer('passengers')->unsigned();
            $table->string('tare_weight')->nullable();
            $table->string('tax_class');
            $table->integer('axies')->unsigned();
            $table->string('load_capacity')->nullable();
            $table->string('previous_reg_country')->nullable();
            $table->string('previous_registration')->nullable();
            $table->string('duty')->nullable();
            $table->string('paid')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
}
