<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Gallery extends Model
{
    use HasFactory;
    use HasTranslations;

    protected static function booted()
    {
        static::created(function ($gallery) {
            Cache::forget('gallery');
            self::cacheGallery();
        });

        static::updated(function ($gallery) {
            Cache::forget('gallery');
            self::cacheGallery();
        });

        static::deleted(function ($gallery) {
            Cache::forget('gallery');
            self::cacheGallery();
        });
    }

    public static function cacheGallery()
    {
        Cache::remember('gallery', Carbon::now()->addHours(12), function () {
            return self::all();
        });
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
        'items',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category' => 'array',
        'items' =>'array'
    ];

    public $translatable = ['category', ];

}
