<?php

namespace App\Filament\Resources\ServiceBannerSectionResource\Pages;

use App\Filament\Resources\ServiceBannerSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServiceBannerSection extends EditRecord
{
    protected static string $resource = ServiceBannerSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
