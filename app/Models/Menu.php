<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Menu extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function booted()
    {
        static::created(function ($menu) {
            Cache::forget('menu');
            self::cacheMenu();
        });

        static::updated(function ($menu) {
            Cache::forget('menu');
            self::cacheMenu();
        });

        static::deleted(function ($menu) {
            Cache::forget('menu');
            self::cacheMenu();
        });
    }

    public static function cacheMenu()
    {
        Cache::remember('menu', Carbon::now()->addHours(12), function () {
            return self::all();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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
    ];

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }

    public $translatable = ['name'];
}
