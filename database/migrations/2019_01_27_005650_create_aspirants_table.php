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
        Schema::create('aspirants', function (Blueprint $table) {
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
            $table->unsignedInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->unsignedInteger('examn_id')->nullable();
            $table->foreign('examn_id')->references('id')->on('examns')->onDelete('cascade');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('knowArea_id')->nullable();
            $table->foreign('knowArea_id')->references('id')->on('knowledgement_areas')->onDelete('cascade');
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
