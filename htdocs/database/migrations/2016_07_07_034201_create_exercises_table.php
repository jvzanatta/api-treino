<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->integer('exercise_group_id')->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('exercise_group_id')->references('id')->on('exercise_groups');
            $table->foreign('created_by')->references('id')->on('users');

            $table->index(['id','exercise_group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exercises');
    }
}
