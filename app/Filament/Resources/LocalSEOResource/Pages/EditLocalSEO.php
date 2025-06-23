<?php

namespace App\Filament\Resources\LocalSEOResource\Pages;

use App\Filament\Resources\LocalSEOResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocalSEO extends EditRecord
{
    protected static string $resource = LocalSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
