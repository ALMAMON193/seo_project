<?php

namespace App\Filament\Resources\AboutBannerResource\Pages;

use App\Filament\Resources\AboutBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutBanner extends EditRecord
{
    protected static string $resource = AboutBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
