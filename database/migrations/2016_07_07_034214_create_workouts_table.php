<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80);
            $table->integer('sport_id')->unsigned();
            $table->string('schedule', 7);
            $table->boolean('active')->default(1);
            $table->boolean('detail')->default(1);
            $table->integer('created_by')->nullable()->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sport_id')->references('id')->on('sports');
            $table->foreign('created_by')->references('id')->on('users');

            $table->index(['id', 'sport_id']);
            $table->index(['id', 'schedule']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('workouts');
    }
}
