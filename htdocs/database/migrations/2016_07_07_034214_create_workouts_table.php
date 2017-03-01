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
            $table->integer('modality_id')->unsigned();
            $table->string('schedule', 7);
            $table->boolean('active')->default(1);
            $table->boolean('detail')->default(1);
            $table->integer('created_by')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('modality_id')->references('id')->on('modalities');
            $table->foreign('created_by')->references('id')->on('users');

            $table->index(['id', 'modality_id']);
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
