<?php

namespace App\Filament\Resources\AboutSeoEspResource\Pages;

use App\Filament\Resources\AboutSeoEspResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutSeoEsp extends EditRecord
{
    protected static string $resource = AboutSeoEspResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
