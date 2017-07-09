<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('email', 150)->unique();
            $table->bigInteger('phone')->nullable();
            $table->text('api_token')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->string('nick_name', 50)->nullable();
            $table->string('picture', 300)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('password', 100);
            $table->decimal('fat_percent', 6, 3)->nullable()->unsigned();
            $table->decimal('weight', 6, 3)->nullable()->unsigned();
            $table->decimal('height', 6, 3)->nullable()->unsigned();
            $table->smallInteger('is_coach')->default(1);
            $table->text('info')->nullable();
            $table->string('facebook_id', 100)->nullable();
            $table->string('facebook_link', 200)->nullable();
            $table->string('google_id', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['id', 'birth_date']);
            $table->index(['id', 'email']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');

    }
}
