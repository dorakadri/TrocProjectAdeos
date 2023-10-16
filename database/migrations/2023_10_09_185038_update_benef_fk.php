<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
         Schema::table('charites', function (Blueprint $table) {
             $table->foreign('organisateur')->references('id')->on('users');
         });
     }
 
     public function down()
     {
         
     }
};
