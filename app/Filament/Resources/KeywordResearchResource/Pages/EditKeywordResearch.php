<?php

namespace App\Filament\Resources\KeywordResearchResource\Pages;

use App\Filament\Resources\KeywordResearchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeywordResearch extends EditRecord
{
    protected static string $resource = KeywordResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
