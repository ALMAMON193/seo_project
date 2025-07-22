<?php

namespace App\Filament\Resources;

use App\Models\CMS;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\HomeAboutUS;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HomeAboutUSResource\Pages;
use App\Filament\Resources\HomeAboutUSResource\RelationManagers;

class HomeAboutUSResource extends Resource
{
    protected static ?string $model = CMS::class;


    protected static ?string $navigationGroup = 'Home Page';
    protected static ?string $navigationLabel = 'Who We Are';
    protected static ?int $navigationSort = 0;

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
                                TextInput::make('btn_text')->label('Button Text'),
                                TextInput::make('designation')->label('Designation'),
                                RichEditor::make('sub_content')->label('Sub Content'),
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

                        Section::make('Page & Section Settings')
                            ->schema([
                                TextInput::make('page')
                                    ->default('HomePageAboutUS')
                                    ->disabled()
                                    ->dehydrated(true),
                                TextInput::make('section')
                                    ->default('HomeSectionAboutUS')
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
                return $query->homeAboutUS();
            })
            ->columns([
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->sortable()
                    ->searchable()
                    ->limit(50)
                    ->formatStateUsing(fn(?string $state): string => strip_tags($state ?? '')),
                ImageColumn::make('image')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('image_alt')
                    ->label('Image Alt Text')
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
            'index' => Pages\ListHomeAboutUS::route('/'),
            'create' => Pages\CreateHomeAboutUS::route('/create'),
            'edit' => Pages\EditHomeAboutUS::route('/{record}/edit'),
        ];
    }
}
