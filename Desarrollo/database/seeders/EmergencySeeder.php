<?php

namespace Database\Seeders;

use App\Models\Emergency;
use App\Models\EmergencyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmergencySeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $type = EmergencyType::first();

        Emergency::create([
            'emergency_type_id' => $type->id,
            'name' => 'Warehouse fire',
            'address' => '123 Main St',
            'longitud' => -58.3816,
            'latitude' => -34.6037,
            'status' => 'recibido',
        ]);
    }
}
