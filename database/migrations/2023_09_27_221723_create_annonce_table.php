<?php

use App\Enums\AnnonceEchangeTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('tags');
            $table->string('title');
            $table->string('location')->nullable();
            $table->boolean('taken')->nullable()->default(false);
            $table->string('image')->nullable();
            $table->longText('description');
            $table->string('echangetype')->default(AnnonceEchangeTypeEnum::ObjectObject->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce');
    }
};
