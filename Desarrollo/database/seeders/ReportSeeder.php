<?php

namespace Database\Seeders;

use App\Models\Emergency;
use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $emergency = Emergency::first();

        if ($emergency) {
            Report::create([
                'emergency_id' => $emergency->id,
                'details' => 'Initial dispatch report generated for the first emergency.',
            ]);
        }
    }
}
