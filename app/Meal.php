<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function menu_days()
    {
        return $this->belongsToMany('App\MenuDay', 'week_day_meals');
    }

    public function meal_times()
    {
        return $this->belongsToMany('App\MealTime', 'week_day_meals');
    }
}