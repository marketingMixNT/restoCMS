<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Cache::remember('gallery', 60, function() {
            return Gallery::all();
        });

        // dd($gallery);

        return view('welcome',['gallery'=>$gallery]);
    }
}
