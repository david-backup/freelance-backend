<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->integer('idOption')->autoIncrement(); // Clé primaire auto-incrémentée
            $table->string('name'); // Nom de l'option
            $table->text('description')->nullable(); // Description de l'option
            $table->decimal('price', 10, 2)->nullable(); // Prix de l'option
            $table->boolean('active')->default(true); // Indique si l'option est active
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
