<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeWhyTrust;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeWhyTrustResource\Pages;
use App\Filament\Resources\HomeWhyTrustResource\RelationManagers;

class HomeWhyTrustResource extends Resource
{
    protected static ?string $model = CMS::class;


    protected static ?string $navigationGroup = 'Home Page';
    protected static ?string $navigationLabel = 'Why Trust Us';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(12)
                    ->schema([
                        Section::make('Content Details')
                            ->schema([
                                RichEditor::make('content')
                                    ->label('Content')
                                    ->columnSpanFull(),

                            ])
                            ->columnSpan(8),

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('HomePageWhyTrustWithUs')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('HomeSectionWhyTrustWithUs')
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
                return $query->homeWhyTrust();
            })
            ->columns([

                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->searchable()
                    ->limit(130)
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
            'index' => Pages\ListHomeWhyTrusts::route('/'),
            'create' => Pages\CreateHomeWhyTrust::route('/create'),
            'edit' => Pages\EditHomeWhyTrust::route('/{record}/edit'),
        ];
    }
}
