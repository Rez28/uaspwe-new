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
        Schema::create('atlets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kontingen_id')->constrained('kontingens')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('name');
            $table->date('birth_date');
            $table->int('weight');
            $table->int('height');
            $table->enum('gender', ['L', 'P']);
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atlets');
    }
};
