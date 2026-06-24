<?php

namespace App\Filament\Resources\Reports\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('emergency_id')
                    ->relationship('emergency', 'name')
                    ->required(),
                Textarea::make('details')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
