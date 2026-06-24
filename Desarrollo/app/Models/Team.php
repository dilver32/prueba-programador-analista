<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'status'])]
class Team extends Model
{
    use HasFactory;

    protected $table = 'team';

    public function stations(): BelongsToMany
    {
        return $this->belongsToMany(Station::class, 'station_teams', 'team_id', 'station_id')
            ->withTimestamps();
    }
}
