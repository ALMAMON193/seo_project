<?php

namespace App\Filament\Resources\HomeAboutUSResource\Pages;

use App\Filament\Resources\HomeAboutUSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeAboutUS extends EditRecord
{
    protected static string $resource = HomeAboutUSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
