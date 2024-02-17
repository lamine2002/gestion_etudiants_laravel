<?php

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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // generer par defaut par laravel
            $table->string('firstname', 100); // cree une colonne firstname de type string de taille 100
            $table->string('lastname', 100);  // cree une colonne lastname de type string de taille 100
            $table->date('birthday'); // cree une colonne birthday de type date
            $table->string('phone'); // cree une colonne phone de type string
            $table->string('email')->unique(); // cree une colonne email
            $table->string('birthplace');
            $table->string('image')->nullable(); // cree une colonne image de type string qui peut etre null
            // Autre facon de faire la ligne precedente
            // $table->unsignedBigInteger('class_id');
            // $table->foreign('class_id')->references('id')->on('classes');
            $table->timestamps(); // creer par defaut et cree deux colonnes created_at et updated_at de type timestamp qui sont remplies automatiquement par laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students'); // supprime la table students si elle existe lors d'un rollback
    }
};
