<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class MenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $menus = Cache::remember('menu', Carbon::now()->addHours(12), function() {
          return   Menu::with('dishes')->get();;
        });

        return view('pages.menu.index',['menus'=>$menus]);
    }
}
