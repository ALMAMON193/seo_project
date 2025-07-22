<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

use Illuminate\Database\Eloquent\Builder;;

use App\Filament\Resources\HomeAboutUSItemResource\Pages;
use Filament\Forms\Components\RichEditor;

class HomeAboutUSItemResource extends Resource
{
    protected static ?string $model = CMS::class;



    protected static ?string $navigationGroup = 'Home Page';
    protected static ?string $navigationLabel = 'Who We Are Items';
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                RichEditor::make('title')
                                    ->columnSpanFull(),

                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('HomePageAboutUSItem')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('HomeSectionAboutUSItem')
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
                return $query->homeAboutUSItems();
            })
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->limit(30)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? ''))
                    ->searchable(),
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
            'index' => Pages\ListHomeAboutUSItems::route('/'),
            'create' => Pages\CreateHomeAboutUSItem::route('/create'),
            'edit' => Pages\EditHomeAboutUSItem::route('/{record}/edit'),
        ];
    }
}
