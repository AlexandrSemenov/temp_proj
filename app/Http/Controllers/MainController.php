<?php

namespace App\Http\Controllers;

use App\Menu;
use App\WeekDay;
use App\MenuDay;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        try {

            $menu = Menu::where('program_id', '=', 1)->first();

            $menu_day = $menu->menu_days->where('week_day_id', '=', 1)->first();

            $meals = DB::table('menus')->where('program_id', '=', 1)
                ->join('menu_days', 'menus.id', '=', 'menu_days.menu_id')
                ->where('menu_days.week_day_id', '=', 1)
                ->join('week_day_meals', 'menu_days.id', '=', 'week_day_meals.menu_day_id')
                ->join('meal_times', 'week_day_meals.meal_time_id', '=', 'meal_times.id')
                ->join('meals', 'week_day_meals.meal_id', '=', 'meals.id')
                ->orderBy('meal_times.order', 'asc')
                ->select('meal_times.name as time_name', 'meals.name', 'meals.calories', 'meals.weight')
                ->get();

            return view('main.index', ['meals' => $meals, 'week_day' => $menu_day->week_day->name]);

        } catch (\ErrorException $e) {
            echo "ничего не найдено" . PHP_EOL;
        }







    }
}
