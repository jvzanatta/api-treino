<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_coaches', function (Blueprint $table) {
            $table->integer('coach_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->primary(['coach_id', 'user_id']);

            $table->foreign('coach_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_coaches');
    }
}
