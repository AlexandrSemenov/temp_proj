<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function menu_days()
    {
        return $this->belongsToMany('App\MenuDay', 'menu_day_meal');
    }

    public function meal_times()
    {
        return $this->belongsToMany('App\MealTime', 'menu_day_meal');
    }
}