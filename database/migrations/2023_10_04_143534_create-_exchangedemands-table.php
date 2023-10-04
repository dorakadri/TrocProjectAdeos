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
        Schema::create('Exchangedemands', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->default('1');
            $table->foreignId('annonce_id')->constrained('annonces')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending');
            $table->text('description')->nullable(); 
            $table->string('echangetype')->default('objectobject');
            $table->string('picture')->nullable(); 

            // Timestamps
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
        Schema::dropIfExists('Exchangedemands');
    }
};
