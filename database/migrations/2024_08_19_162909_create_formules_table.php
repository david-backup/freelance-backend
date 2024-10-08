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
        Schema::create('formulas', function (Blueprint $table) {
            $table->integer('idFormula')->autoIncrement(); // Clé primaire auto-incrémentée
            $table->string('name'); // Nom de la formule
            $table->text('description')->nullable(); // Description de la formule
            $table->decimal('basePrice', 10, 2); // Prix de base de la formule
            $table->boolean('popular')->default(false); // Indique si la formule est populaire
            $table->boolean('active')->default(true); // Indique si la formule est active
            $table->timestamps(); // Ajoute les colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulas');
    }
};
