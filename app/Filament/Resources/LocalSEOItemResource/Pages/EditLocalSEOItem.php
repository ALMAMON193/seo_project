<?php

namespace App\Filament\Resources\LocalSEOItemResource\Pages;

use App\Filament\Resources\LocalSEOItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocalSEOItem extends EditRecord
{
    protected static string $resource = LocalSEOItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
