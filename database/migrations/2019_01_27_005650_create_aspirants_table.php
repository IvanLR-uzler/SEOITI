<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspirantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspirant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('app');
            $table->string('apm');
            $table->integer('age');
            $table->char('genre');
            $table->string('direction');
            $table->string('email');
            $table->date('bornDate');
            $table->string('cellphone');
            $table->integer('totalReactives')->nullable();
            $table->json('answersExamn')->nullable();
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->unsignedInteger('examn_id');
            $table->foreign('examn_id')->references('id')->on('examns');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('knowArea_id');
            $table->foreign('knowArea_id')->references('id')->on('knowledgmentArea');
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
        Schema::dropIfExists('aspirants');
    }
}
