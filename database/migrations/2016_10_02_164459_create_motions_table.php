<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motion');
            $table->integer('round_id')->unsigned()->index();
            $table->integer('tournament_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->integer('status');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();;
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
        Schema::dropIfExists('motions');
    }
}
