<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levelss');
            $table->text('lable_1');
            $table->text('lable_2');
           /* $table->string('name');
            $table->string('email')->unique();
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levelss');
            $table->string('social_id');
            $table->integer('life');
            $table->integer('timeout');
            $table->integer('point');*/
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
        //
    }
}
