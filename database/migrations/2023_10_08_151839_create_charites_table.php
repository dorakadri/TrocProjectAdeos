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
        Schema::create('charites', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('date');
            $table->string('lieu');
            $table->text('description'); // Utilisez "text" au lieu de "string" pour une description plus longue
            $table->unsignedBigInteger('organisateur');
            $table->unsignedBigInteger('beneficiaire'); // Utilisez "unsignedBigInteger" pour les clés étrangères ou les valeurs numériques importantes
            $table->decimal('budget', 10, 2); // Utilisez "decimal" pour le budget avec précision et échelle
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
        Schema::dropIfExists('charites');
    }
};
