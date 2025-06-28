<?php

namespace App\Filament\Resources\HomeAboutUSItemResource\Pages;

use App\Filament\Resources\HomeAboutUSItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeAboutUSItem extends EditRecord
{
    protected static string $resource = HomeAboutUSItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
