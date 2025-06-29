<?php

namespace App\Filament\Resources\AboutRealExperienceResource\Pages;

use App\Filament\Resources\AboutRealExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutRealExperience extends EditRecord
{
    protected static string $resource = AboutRealExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
