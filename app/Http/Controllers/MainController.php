<?php

namespace App\Http\Controllers;

use App\Menu;

class MainController extends Controller
{
    public function index()
    {
        try{
            $menu_day = Menu::where('program_id', '=', 1)->where('subscription_plan_id', '=', 3)->first()->menu_days->where('week_day_id', '=', 2)->first();
            return view('main.index', ['meals' => $menu_day->meals]);
        }catch (\ErrorException $e)
        {
            echo "ничего не найдено" . PHP_EOL;
        }
    }
}
