<?php

namespace App\Models;

use App\Models\Menu;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Dish extends Model
{
    use HasFactory;
    use HasTranslations;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ingredients',
        'price',
        'menu_id',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'ingredients' => 'array',
        'menu_id' => 'integer',
    ];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public static function getForm()
    {
        return [
            TextInput::make('name')
                ->label('Nazwa')
                ->required()
                ->minLength(3),
            TextInput::make('price')
                ->label('Cena')
                ->required()
                ->numeric()
                ->suffix('zł'),
            Textarea::make('ingredients')
                ->label('Składniki')
                ->required()
                ->minLength(3)
                ->columnSpanFull(),
        ];
    }

    public static function getFormRepeater()
    {
        return [
            TextInput::make('name')
                // ->afterStateHydrated(function (TextInput $component, $state) {
                //     if ($state !== null) {
                //         (isset($state[app()->getLocale()]))
                //             ? $component->state($state[app()->getLocale()])
                //             : $component->state($state[config('app.fallback_locale')]);
                //     }
                // })
                ->label('Nazwa')
                ->required()
                ->minLength(3),
            TextInput::make('price')
                ->label('Cena')
                ->required()
                ->numeric()
                ->suffix('zł'),
            Textarea::make('ingredients')
                // ->afterStateHydrated(function (TextArea $component, $state) {
                //     if ($state !== null) {
                //         (isset($state[app()->getLocale()]))
                //             ? $component->state($state[app()->getLocale()])
                //             : $component->state($state[config('app.fallback_locale')]);
                //     }
                // })
                ->label('Składniki')
                ->required()
                ->minLength(3)
                ->columnSpanFull(),
        ];
    }

    public $translatable = ['name', 'ingredients'];
}
