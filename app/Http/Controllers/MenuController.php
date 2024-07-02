<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $menus = Menu::with('dishes')->get();

    //    dd($menus);

        return view('pages.menu.index',['menus'=>$menus]);
    }
}
