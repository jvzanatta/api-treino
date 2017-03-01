<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modality_id')->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->string('name', 100);
            $table->timestamps();

            $table->index(['id', 'modality_id']);

            $table->foreign('modality_id')->references('id')->on('modalities');
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
        Schema::drop('exercise_groups');
    }
}
