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
        Schema::create('reponses', function (Blueprint $table) {
            $table->id();
          $table->string('description'); 

                 $table->unsignedBigInteger('reclamation_id'); // Use unsigned big integer
        $table->foreign('reclamation_id')
            ->references('id')
            ->on('reclamations')
            ->onDelete('cascade');;

            
  $table->unsignedBigInteger('user_id'); // Add this line for user relationship
  $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


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
        Schema::dropIfExists('reponses');
    }
};
