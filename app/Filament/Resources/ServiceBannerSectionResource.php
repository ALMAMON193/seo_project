<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ServiceBannerSectionResource\Pages;


class ServiceBannerSectionResource extends Resource
{
    protected static ?string $model = CMS::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Service Banner Section';
    protected static ?string $navigationLabel = 'Service Banner';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                RichEditor::make('title')
                                    ->label('Title')
                                    ->toolbarButtons([
                                        'h1'
                                    ]),
                                RichEditor::make('content')
                                    ->label('Content')
                                    ->columnSpanFull(),
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('cms-images')
                                    ->columnSpanFull(),
                                TextInput::make('image_alt')
                                    ->label('Image Alt Text')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & SEO Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('ServicePageBanner')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('ServiceSectionBanner')
                                    ->disabled()
                                    ->dehydrated(true),
                                Section::make('SEO Metadata')
                                    ->schema([
                                        TextInput::make('meta_title')
                                            ->label('Meta Title')
                                            ->maxLength(60)
                                            ->helperText('Recommended length: 50-60 characters'),
                                        Textarea::make('meta_description')
                                            ->label('Meta Description')
                                            ->maxLength(160)
                                            ->rows(4)
                                            ->helperText('Recommended length: 150-160 characters'),
                                        TextInput::make('meta_tag')
                                            ->label('Meta Tags')
                                            ->maxLength(255)
                                            ->helperText('Comma-separated keywords'),
                                    ])
                                    ->collapsible()
                                    ->collapsed(),
                            ])
                            ->columnSpan(4),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceBannerSections::route('/'),
            'create' => Pages\CreateServiceBannerSection::route('/create'),
            'edit' => Pages\EditServiceBannerSection::route('/{record}/edit'),
        ];
    }
}
