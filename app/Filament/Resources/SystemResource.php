<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SystemResource\Pages;
use App\Models\SystemSetting;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SystemResource extends Resource
{
    protected static ?string $model = SystemSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'System Settings';
    protected static ?string $pluralLabel = 'System Settings';
    protected static ?string $modelLabel = 'System Setting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General Information')
                    ->schema([
                        TextInput::make('system_name')
                            ->label('System Name')
                            ->placeholder('Enter the name of your system or website')
                            ->columnSpanFull(),

                        TextInput::make('copyright')
                            ->label('Copyright')
                            ->placeholder('© 2025 YourCompany')
                            ->helperText('This will be displayed in the footer of the website.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Footer & Contact')
                    ->schema([
                        TextInput::make('address')
                            ->label('Main Address')
                            ->placeholder('123 Main Street, Dhaka, BD'),

                        TextInput::make('office_address')
                            ->label('Office Address')
                            ->placeholder('Corporate Office Address'),

                        TextInput::make('phone')
                            ->placeholder('+8801XXXXXXXXX'),

                        TextInput::make('email')
                            ->email()
                            ->placeholder('info@example.com'),
                    ])
                    ->columns(2),

                Section::make('Social Links')
                    ->schema([
                        TextInput::make('facebook')->label('Facebook URL')->placeholder('https://facebook.com/yourpage'),
                        TextInput::make('twitter')->label('Twitter URL')->placeholder('https://twitter.com/yourhandle'),
                        TextInput::make('linkedin')->label('LinkedIn URL')->placeholder('https://linkedin.com/company/yourcompany'),
                        TextInput::make('youtube')->label('YouTube URL')->placeholder('https://youtube.com/channel/yourchannel'),
                        TextInput::make('instagram')->label('Instagram URL')->placeholder('https://instagram.com/yourprofile'),
                        TextInput::make('whatsapp')->label('WhatsApp Number')->placeholder('+8801XXXXXXXXX'),

                    ])
                    ->columns(2),

                Section::make('Meta Information (SEO)')
                    ->schema([
                        TextInput::make('meta_title')->label('Meta Title')->placeholder('Your website meta title'),
                        TextInput::make('meta_description')->label('Meta Description')->placeholder('Brief meta description for search engines'),
                        TextInput::make('meta_keywords')->label('Meta Keywords')->placeholder('keyword1, keyword2, keyword3'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('system_name')->searchable()->sortable(),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('created_at')->dateTime('d M Y'),
            ])
            ->actions([
                \Filament\Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                \Filament\Tables\Actions\BulkActionGroup::make([
                    \Filament\Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSystems::route('/'),
            'create' => Pages\CreateSystem::route('/create'),
            'edit' => Pages\EditSystem::route('/{record}/edit'),
        ];
    }
}
