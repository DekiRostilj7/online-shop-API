<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddManagerId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('manager_id')->nullable(); //nullable/ zbog starih podataka postavis kao default vrednost
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table){
            $table->dropForeign('users_manager_id_foreign');   //nece ti obrisati dok ne obrises prvo foreign key
            $table->dropColumn('manager_id');
        });
    }
}
