<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');             // Colonne pour le titre
            $table->text('description');         // Colonne pour la description
            $table->unsignedBigInteger('post_creator'); // Colonne pour l'identifiant du créateur du post
            $table->timestamps();                // Colonnes created_at et updated_at
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
