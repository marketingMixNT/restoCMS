<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Menu;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MenuResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MenuResource\RelationManagers;

//CUSTOM
use Filament\Resources\Concerns\Translatable;


class MenuResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Kategoria')
                    ->relationship('category', 'name')
                    ->required()
                    ->createOptionForm(Category::getForm())
                    ->editOptionForm(Category::getForm()),
                Repeater::make('dishes')
                    ->label('Dania')
                    ->relationship()
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nazwa')
                            ->required()
                            ->minLength(3),
                        Forms\Components\TextInput::make('price')
                            ->label('Cena')
                            ->required()
                            ->numeric()
                            ->suffix('zł'),
                        Forms\Components\Textarea::make('ingredients')
                            ->label('Składniki')
                            ->required()
                            ->minLength(3)
                            ->columnSpanFull(),
                    ])

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
                Tables\Columns\TextColumn::make('category.name')
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
        return __('Menu');
    }
    public static function getPluralLabel(): string
    {
        return __('Menu');
    }

    public static function getLabel(): string
    {
        return __('Menu');
    }
}
