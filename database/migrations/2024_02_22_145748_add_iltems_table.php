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
        Schema::create('Iltems', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('image');
            $table->integer('price');
            $table->foreignId('categories_id')->constrained('categories' , 'id');
            $table->foreignId('menus_id')->constrained('menus' , 'id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Iltems');
    }
};
