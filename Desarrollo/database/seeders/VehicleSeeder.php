<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        Vehicle::insert([
            ['number' => 'A123', 'status' => 'disponible', 'created_at' => now(), 'updated_at' => now()],
            ['number' => 'B456', 'status' => 'no disponible', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
