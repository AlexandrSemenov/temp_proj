<?php

namespace App\Http\Controllers;

use App\Menu;
use App\WeekDay;

class MainController extends Controller
{
    public function index()
    {
        try{
//            $menu_day = Menu::where('program_id', '=', 1)->where('subscription_plan_id', '=', 3)->first()->menu_days->where('week_day_id', '=', 2)->first();
//            $week_day = $menu_day->week_day->name;
//
//            $meal_times = $menu_day->meal_times;
//
//            foreach($meal_times as $meal_time){
//                var_dump($meal_time->name);
//            }
//            die();
//            return view('main.index', ['meals' => $menu_day->meals, 'week_day' => $week_day]);


            $menu = Menu::where('program_id', '=', 1)->where('subscription_plan_id', '=', 3)->first();
            $menu_day = $menu->menu_days->where('week_day_id', '=', 2)->first();
            $meals = $menu_day->meals()->get();

            foreach ($meals as $meal){
                var_dump($meal->meal_times);
            }

//            foreach ($meals as $meal)
//            {
//                var_dump($meal);
//            }


        }catch (\ErrorException $e)
        {
            echo "ничего не найдено" . PHP_EOL;
        }
    }
}
