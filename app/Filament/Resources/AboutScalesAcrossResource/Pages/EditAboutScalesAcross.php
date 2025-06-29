<?php

namespace App\Filament\Resources\AboutScalesAcrossResource\Pages;

use App\Filament\Resources\AboutScalesAcrossResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutScalesAcross extends EditRecord
{
    protected static string $resource = AboutScalesAcrossResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
