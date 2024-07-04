<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Dish;
use App\Models\Menu;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\MenuResource\Pages;


//CUSTOM
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MenuResource\RelationManagers;

class MenuResource extends Resource
{
    use Translatable;
    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }

    protected static ?string $model = Menu::class;

    protected static ?string $navigationGroup = 'Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Shout::make('info')
                ->type('info')
                ->content('Dania możesz przetłumaczyć w zakładce "Dania".')
                ->columnSpanFull(),
                TextInput::make('name')
                    ->label('Nazwa')
                    ->required()
                    ->unique()
                    ->minLength(3)
                    ->maxLength(255),
                Repeater::make('dishes')
                    ->label('Dania')
                    ->relationship()
                    ->columns(2)
                    ->schema(Dish::getForm())
                    ->columnSpanFull()
                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                    ->addActionLabel('Dodaj danie')
                    ->collapsed()
                    ->cloneable()
                    ->orderColumn('sort')
                    ->reorderable(true)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Kategoria Menu')
                    ->numeric()
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Menu');
    }
    public static function getPluralLabel(): string
    {
        return ('Menu');
    }

    public static function getLabel(): string
    {
        return ('Menu');
    }
}
