<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emergency_station', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('station')->cascadeOnDelete();
            $table->foreignId('emergency_id')->constrained('emergency')->cascadeOnDelete();
            $table->enum('status', ['en camino', 'en sitio'])->default('en camino');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emergency_station');
    }
};
