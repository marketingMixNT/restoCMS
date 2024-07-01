<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Dish;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\DishResource\Pages;

//CUSTOM
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DishResource\RelationManagers;

class DishResource extends Resource
{

    use Translatable;
    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Dish::class;

    protected static ?string $navigationGroup = 'Menu';


    public static function form(Form $form): Form
    {
        return $form
            ->schema(Dish::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->description(function (Dish $record) {
                        return Str::of($record->ingredients)->limit(40);
                    }),
                Tables\Columns\TextColumn::make('menu.name')
                    ->label('Kategoria')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Cena')
                    ->suffix(' zł')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDishes::route('/'),
            'create' => Pages\CreateDish::route('/create'),
            'edit' => Pages\EditDish::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('Dania');
    }
    public static function getPluralLabel(): string
    {
        return __('Dania');
    }

    public static function getLabel(): string
    {
        return __('Dania');
    }
}
