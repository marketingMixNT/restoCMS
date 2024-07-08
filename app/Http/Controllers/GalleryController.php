<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $gallery = Cache::remember('gallery', Carbon::now()->addHours(12), function() {
            return Gallery::all();
        });


        return view('pages.gallery.index',['gallery'=>$gallery]);
    }
}
