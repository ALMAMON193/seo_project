<?php

namespace App\Filament\Resources\TechnicalSEOResource\Pages;

use App\Filament\Resources\TechnicalSEOResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechnicalSEO extends EditRecord
{
    protected static string $resource = TechnicalSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
