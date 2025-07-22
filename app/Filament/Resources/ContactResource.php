<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationLabel = 'Contacts';

    protected static ?string $modelLabel = 'Contact Message';

    protected static ?string $pluralModelLabel = 'Contact Messages';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fname')->label('First Name'),
                Tables\Columns\TextColumn::make('lname')->label('Last Name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('subject'),
                Tables\Columns\TextColumn::make('message')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->actions([
                // Remove Edit action
                // Optionally allow delete:
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContacts::route('/'),
        ];
    }
}
