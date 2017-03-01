<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workouts', function (Blueprint $table) {
            $table->integer('workout_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->timestamps();

            $table->primary(['workout_id', 'user_id']);

            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('user_workouts');
    }
}
