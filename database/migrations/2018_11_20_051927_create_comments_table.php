<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        for($i=0;$i<8;$i++)
        {
            Schema::create("comments_{$i}", function (Blueprint $table) {
                $table->increments('id');
                $table->integer('topics_id')->unsigned()->default(0);
                $table->integer('users_id')->unsigned()->default(0);
                $table->integer('quote_id')->unsigned()->default(0);
                $table->text('content');
                $table->tinyInteger('is_delete')->unsigned()->default(0)->comment('0:未删除，1：已删除');
                $table->tinyInteger('is_exam')->unsigned()->default(0)->comment('0:未审核，1：已审核');
                $table->timestamps();
                $table->index('topics_id', 'idx_topics_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        for($i=0;$i<8;$i++)
        {
            Schema::dropIfExists("comments_{$i}");
        }
    }
}
