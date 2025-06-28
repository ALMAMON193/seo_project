<?php

namespace App\Filament\Resources\HomeWhyTrustResource\Pages;

use App\Filament\Resources\HomeWhyTrustResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeWhyTrust extends EditRecord
{
    protected static string $resource = HomeWhyTrustResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
