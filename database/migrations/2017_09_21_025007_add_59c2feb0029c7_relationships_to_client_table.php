<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add59c2feb0029c7RelationshipsToClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function(Blueprint $table) {
            if (!Schema::hasColumn('clients', 'client_status_id')) {
                $table->integer('client_status_id')->unsigned()->nullable();
                $table->foreign('client_status_id', '75465_59c2feaebf437')->references('id')->on('client_statuses')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function(Blueprint $table) {
            
        });
    }
}
