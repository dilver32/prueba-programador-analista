<?php

namespace Database\Seeders;

use App\Models\EmergencyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmergencyTypeSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        EmergencyType::insert([
            ['name' => 'Fire', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Medical', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Police', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
