<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categorys_id')->unsigned()->default(0);
            $table->integer('users_id')->unsigned()->default(0);
            $table->string('title', 128)->default('');
            $table->string('keywords', 256)->nullable()->default('');
            $table->string('description', 256)->nullable()->default('');
            $table->tinyInteger('is_recommend')->unsigned()->default(0);
            $table->integer('views')->unsigned()->default(0);
            $table->integer('comments')->unsigned()->default(0);
            $table->integer('likes')->unsigned()->default(0);
            $table->integer('favorites')->unsigned()->default(0);
            $table->tinyInteger('is_delete')->unsigned()->default(0)->comment('0:未删除，1：已删除');
            $table->tinyInteger('is_exam')->unsigned()->default(0)->comment('0:未审核，1：已审核');
            $table->integer('last_comment_users_id')->unsigned()->default(0);
            $table->timestamp('last_comment_at')->nullable();
            $table->timestamps();
            $table->index('categorys_id', 'idx_categorys_id');
            $table->index('users_id', 'idx_users_id');
            $table->index('created_at', 'idx_created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
