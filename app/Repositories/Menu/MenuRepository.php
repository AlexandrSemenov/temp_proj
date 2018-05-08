<?php

namespace App\Reposotories\Menu;

use App\Reposotories\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenuRepository extends Repository
{
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function first($id)
    {
        return $this->model::find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param $menu_id
     * @param $day_id
     * @return collection of objects with attributes [meal_times.name, meals.name, meals.calories, meals.weight]
     */
    public function MealsOfMenuForDay($menu_id, $day_id)
    {
        return DB::table('menus')->where('menus.id', '=', $menu_id)
            ->join('menu_days', 'menus.id', '=', 'menu_days.menu_id')
            ->where('menu_days.id', '=', $day_id)
            ->join('week_day_meals', 'menu_days.id', '=', 'week_day_meals.menu_day_id')
            ->join('meal_times', 'week_day_meals.meal_time_id', '=', 'meal_times.id')
            ->join('meals', 'week_day_meals.meal_id', '=', 'meals.id')
            ->orderBy('meal_times.order', 'asc')
            ->select('meal_times.name as time_name', 'meals.name', 'meals.calories', 'meals.weight', 'meals.image')
            ->get();
    }
}