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
        Schema::create('add_ans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ans_User_id')->unsigned();
            $table->integer('ans_Que_id')->unsigned();
            $table->longText('add_answer');
            $table->integer('ans_Cat_id')->unsigned();
            $table->timestamps();

            $table->foreign('ans_Que_id')->references('cat_Que_id')->on('add_ques');
            $table->foreign('ans_User_id')->references('user_id')->on('users');
            $table->foreign('ans_Cat_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_ans');
    }
};
