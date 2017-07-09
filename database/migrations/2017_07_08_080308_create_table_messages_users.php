<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMessagesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('message_user', function (Blueprint $table) {
        //     $table->integer('user_id')->unsigned();
        //     $table->integer('message_id')->unsigned();

        //     $table->primary(['message_id', 'user_id']);

        //     $table->foreign('message_id')->references('id')->on('users');
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_user');
    }
}
