<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levelss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level');
            $table->integer('lable_1_step');
            $table->integer('lable_2_step');
            /*$table->integer('count_of_steps');
            $table->integer('time');
            /*$table->integer('bal');*/
            /*$table->integer('score');
            $table->integer('level');
            $table->enum('on_off', array('0','1'));*/
            /*$table->integer('gamers_id')->unsigned();
            $table->foreign('gamers_id')->references('id')->on('gamers'); */



            /*$table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levelss');
    }
}
