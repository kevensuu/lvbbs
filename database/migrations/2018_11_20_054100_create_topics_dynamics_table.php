<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsDynamicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics_dynamics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topics_id')->unsigned()->default(0)->unique();
            $table->integer('views')->unsigned()->default(0);
            $table->integer('comments')->unsigned()->default(0);
            $table->integer('likes')->unsigned()->default(0);
            $table->integer('favorites')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics_dynamics');
    }
}
