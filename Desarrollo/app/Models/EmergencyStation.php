<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['station_id', 'emergency_id', 'status'])]
class EmergencyStation extends Model
{
    use HasFactory;

    protected $table = 'emergency_station';

    public function station(): BelongsTo
    {
        return $this->belongsTo(Station::class, 'station_id');
    }

    public function emergency(): BelongsTo
    {
        return $this->belongsTo(Emergency::class, 'emergency_id');
    }
}
