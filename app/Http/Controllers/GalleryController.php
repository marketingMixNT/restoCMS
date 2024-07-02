<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $gallery = Cache::remember('gallery', 60, function() {
            return Gallery::all();
        });

        // dd($gallery);

        return view('pages.gallery.index',['gallery'=>$gallery]);
    }
}
