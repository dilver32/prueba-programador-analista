<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('emergency', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emergency_type_id')->constrained('emergency_type')->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->decimal('longitud', 10, 7)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->enum('status', ['recibido', 'asignado', 'resuelto'])->default('recibido');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('emergency');
    }
};
