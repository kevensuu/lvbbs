<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned()->default(0);
            $table->integer('topics_id')->unsigned()->default(0);
            $table->integer('comments_id')->unsigned()->default(0);
            $table->tinyInteger('is_delete')->unsigned()->default(0)->comment('0:未删除，1：已删除');
            $table->tinyInteger('is_exam')->unsigned()->default(0)->comment('0:未审核，1：已审核');
            $table->timestamps();
            $table->index('users_id', 'idx_users_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_comments');
    }
}
