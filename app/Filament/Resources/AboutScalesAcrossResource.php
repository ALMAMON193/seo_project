<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AboutScalesAcrossResource\Pages;


class AboutScalesAcrossResource extends Resource
{
    protected static ?string $model = CMS::class;



    protected static ?string $navigationGroup = 'About Sections';

    protected static ?string $label = 'Scales Across';
    protected static ?int $navigationSort = 2;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([

                        Section::make('Content Details')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->maxLength(255)
                                    ->columnSpanFull(),

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
                                TextInput::make('designation')
                                    ->label('Designation')
                                    ->maxLength(255)
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings Local SEO')
                            ->schema([
                                TextInput::make('page')
                                    ->default('AboutPageSalesAcross')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('AboutSectionSalesAcross')
                                    ->disabled()
                                    ->dehydrated(true),
                            ])
                            ->columnSpan(4),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query) {
                return $query->aboutScalesAcross();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),

                ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('image_alt')
                    ->label('Image Alt Text')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                Tables\Columns\TextColumn::make('designation')
                    ->label('Designation')
                    ->sortable()
                    ->searchable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAboutScalesAcrosses::route('/'),
            'create' => Pages\CreateAboutScalesAcross::route('/create'),
            'edit' => Pages\EditAboutScalesAcross::route('/{record}/edit'),
        ];
    }
}
