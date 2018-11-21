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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32)->unique()->default('');
            $table->string('email', 32)->unique()->default('');
            $table->string('nickname', 32)->nullable()->default('');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('reg_ip', 32)->nullable()->default('');
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip', 32)->nullable()->default('');
            $table->tinyInteger('is_admin')->unsigned()->default(0);
            $table->tinyInteger('is_forbidden')->unsigned()->default(0);
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
        Schema::dropIfExists('users');
    }
}
