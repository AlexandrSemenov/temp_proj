<?php

namespace App\Http\Controllers;

use App\Menu;
use App\WeekDay;

class MainController extends Controller
{
    public function index()
    {
        try {

            $menu = Menu::where('program_id', '=', 1)->first();
            $menu_day = $menu->menu_days->where('week_day_id', '=', 1)->first();
            $meals_times = $menu_day->meal_times()->orderBy('order', 'asc')->get();

            $meals = [];

            foreach ($meals_times as $meals_time) {
                $meals[] = $meals_time->meals->first();
            }

            return view('main.index', ['meals' => $meals, 'week_day' => $menu_day->week_day->name]);

        } catch (\ErrorException $e) {
            echo "ничего не найдено" . PHP_EOL;
        }
    }
}
