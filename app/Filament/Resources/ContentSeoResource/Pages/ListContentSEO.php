<?php

namespace App\Filament\Resources\ContentSEOResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ContentSEOResource;

class ListContentSEO extends CreateRecord
{
    protected static string $resource = ContentSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
