<?php

namespace App\Filament\Resources\ECommerceResource\Pages;

use App\Filament\Resources\ECommerceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditECommerce extends EditRecord
{
    protected static string $resource = ECommerceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
