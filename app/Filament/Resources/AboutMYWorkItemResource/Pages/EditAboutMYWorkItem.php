<?php

namespace App\Filament\Resources\AboutMYWorkItemResource\Pages;

use App\Filament\Resources\AboutMYWorkItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutMYWorkItem extends EditRecord
{
    protected static string $resource = AboutMYWorkItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
