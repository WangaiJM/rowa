<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotinsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plotinsurances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id')->unsigned();
            $table->bigInteger('plot_id')->unsigned();
            $table->integer('premium');
            $table->integer('fire');
            $table->integer('floods');
            $table->integer('terrorism');
            $table->string('added_on');
            $table->string('expires_on');
            $table->timestamps();

            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plotinsurances');
    }
}
