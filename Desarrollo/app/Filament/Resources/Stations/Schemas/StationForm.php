<?php

namespace App\Filament\Resources\Stations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('longitud')
                    ->numeric(),
                TextInput::make('latitud')
                    ->numeric(),
            ]);
    }
}
