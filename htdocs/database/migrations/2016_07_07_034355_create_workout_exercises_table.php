<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_exercises', function (Blueprint $table) {
            $table->integer('workout_id')->unsigned();
            $table->integer('exercise_id')->unsigned();
            $table->string('day',1);
            $table->double('weight', 6, 3)->unsigned()->nullable();
            $table->double('distance', 7, 3)->unsigned()->nullable();
            $table->smallInteger('repeat')->unsigned()->nullable();
            $table->smallInteger('series')->unsigned()->nullable();
            $table->smallInteger('laps')->unsigned()->nullable();
            $table->integer('created_by')->nullable()->unsigned();
            $table->timestamps();

            $table->index(['workout_id', 'exercise_id']);
            $table->index(['workout_id', 'exercise_id', 'day']);

            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->foreign('exercise_id')->references('id')->on('exercises');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workout_exercises');
    }
}
