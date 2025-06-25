<?php

namespace App\Filament\Resources\EnterpriseSEOResource\Pages;

use App\Filament\Resources\EnterpriseSEOResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEnterpriseSEO extends EditRecord
{
    protected static string $resource = EnterpriseSEOResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
