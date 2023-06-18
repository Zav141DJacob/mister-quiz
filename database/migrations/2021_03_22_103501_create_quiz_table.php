<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('quizzes');
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->boolean('submitted');
            $table->string('category');
            $table->integer('selected')->default(0);
            $table->unsignedBigInteger('score');
            $table->foreignId('question_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('quizzes');
    }
}
