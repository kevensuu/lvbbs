<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->unsigned()->default(0)->comment('置顶类型，1：全局置顶、2：栏目置顶');
            $table->integer('categorys_id')->unsigned()->default(0);
            $table->tinyInteger('is_forever')->unsigned()->default(0)->comment('0：非永久，1：永久');
            $table->integer('topics_id')->unsigned()->default(0);
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('order_num')->unsigned()->default(0);
            $table->index('categorys_id', 'idx_categorys_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top_topics');
    }
}
