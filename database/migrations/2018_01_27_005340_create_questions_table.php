<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('context');
            $table->string('ansA');
            $table->string('ansB');
            $table->string('ansC');
            $table->string('ansD');
            $table->char('correctAns');
            $table->integer('reactive')->nullable();
            $table->unsignedInteger('know_id')->nullable();
            $table->foreign('know_id')->references('id')->on('knowledgement_areas')->onDelete('cascade');
            $table->unsignedInteger('usuario_id')->nullable();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('questions');
    }
}
