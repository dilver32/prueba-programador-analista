<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['emergency_id', 'details'])]
class Report extends Model
{
    use HasFactory;

    protected $table = 'report';

    public function emergency(): BelongsTo
    {
        return $this->belongsTo(Emergency::class, 'emergency_id');
    }
}
