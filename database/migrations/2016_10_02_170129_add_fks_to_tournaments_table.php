<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFksToTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tournaments', function(Blueprint $table){
            $table->foreign('host_institution_id', 'fk_host_institution_id_tourn_id_hosts')
            ->references('id')
            ->on('rounds')
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
         Schema::table('tournaments', function(Blueprint $table){
            $table->dropForeign('fk_host_institution_id_tourn_id_hosts');
        });
    }
}
