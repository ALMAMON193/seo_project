<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('fname')->label('First Name')->disabled(),
            TextInput::make('lname')->label('Last Name')->disabled(),
            TextInput::make('email')->disabled(),
            TextInput::make('phone')->disabled(),
            TextInput::make('company_name')->label('Company Name')->disabled(),
            TextInput::make('subject')->disabled(),
            Textarea::make('message')->disabled(),
        ];
    }
}
