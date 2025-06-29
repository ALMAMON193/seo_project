<?php

namespace App\Filament\Resources\AboutMYWorkResource\Pages;

use App\Filament\Resources\AboutMYWorkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMYWork extends EditRecord
{
    protected static string $resource = AboutMYWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
