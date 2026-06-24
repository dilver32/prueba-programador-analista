<?php

namespace Database\Seeders;

use App\Models\Emergency;
use App\Models\EmergencyStation;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmergencyStationSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $emergency = Emergency::first();
        $station = Station::first();

        if ($emergency && $station) {
            EmergencyStation::create([
                'station_id' => $station->id,
                'emergency_id' => $emergency->id,
                'status' => 'en camino',
            ]);
        }
    }
}
