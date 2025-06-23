<?php

namespace App\Filament\Resources\ContentSEOResource\Pages;

use App\Filament\Resources\ContentSEOResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContentSEO extends EditRecord
{
    protected static string $resource = ContentSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
