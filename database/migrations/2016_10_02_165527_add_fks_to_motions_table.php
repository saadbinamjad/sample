<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFksToMotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('motions', function(Blueprint $table){
            $table->foreign('round_id', 'fk_round_id_motions_id_rounds')
            ->references('id')
            ->on('rounds')
            ->onUpdate('NO ACTION')
            ->onDelete('NO ACTION');

            $table->foreign('tournament_id', 'fk_tourn_id_motions_id_tourn')
            ->references('id')
            ->on('tournaments')
            ->onUpdate('NO ACTION')
            ->onDelete('NO ACTION');

            $table->foreign('user_id', 'fk_user_id_motions_id_users')
            ->references('id')
            ->on('users')
            ->onUpdate('NO ACTION')
            ->onDelete('NO ACTION');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('motions', function(Bluepring $table){
            $table->dropForeign('fk_user_id_motions_id_users');
            $table->dropForeign('fk_tourn_id_motions_id_tourn');
            $table->dropForeign('fk_user_id_motions_id_users');
             
        });
    }
}
