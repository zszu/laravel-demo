<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zz_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('nickname');
            $table->string('password');
            $table->integer('group')->length(1);
            $table->integer('gender')->length(1);
            $table->string('avatar');
            $table->integer('status');
            $table->string('created_ip')->length(15);
            $table->string('last_login_ip')->length(15);
            $table->string('last_login_at')->length(11);
            $table->integer('login_times')->length(11);

            $table->string('qq')->unique();
            $table->string('email')->unique();
            $table->string('mobile')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('zz_user');
    }
}
