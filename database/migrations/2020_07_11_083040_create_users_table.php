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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('status')->default(0);
            $table->integer('user_type')->default(0);
            $table->string('username', 50)->unique();
            $table->string('password',100);
            $table->string('device_token', 100)->nullable();
            $table->string('fcm_token', 100)->nullable();
            $table->rememberToken();
            $table->string('email_verified_token', 100)->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->date('last_login')->nullable();
            $table->tinyInteger('is_login')->default(0);
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
        Schema::dropIfExists('users');
    }
}
