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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('post');
            $table->string('archivo');
            $table->string('imagen');
            $table->integer('aprovacion')->default(0);
            $table->string('titulo');        
        
            $table->double('descarga');
            
            
            $table->foreignId('id_categoria')
                  ->nullable()
                  ->constrained('categorias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();  

            $table->foreignId('id_subcategoria')
                  ->nullable()
                  ->constrained('subcategorias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();        
            

            $table->foreignId('id_usuario')
                  ->nullable()
                  ->constrained('users')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();  


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
