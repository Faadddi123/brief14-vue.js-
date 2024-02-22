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
        Schema::create('SubscriptionForOwners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users', 'id');
            $table->foreignId('TypeOfSubs_id')->constrained('TypeOfSubs', 'id');
            $table->unique(['users_id', 'TypeOfSubs_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('SubscriptionForOwners');
    }
};
