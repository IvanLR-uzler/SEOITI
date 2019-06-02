<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamnQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examn_question', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('examn_id')->index();
            $table->foreign('examn_id')->references('id')->on('examns')->onDelete('cascade');
            $table->unsignedInteger('question_id')->index();
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('question_examn');
    }
}
