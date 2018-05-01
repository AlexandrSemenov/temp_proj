<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    public function meals()
    {
        return $this->belongsToMany('App\Meal', 'week_day_meals');
    }

    public function menu_days()
    {
        return $this->belongsToMany('App\MenuDay', 'week_day_meals');
    }
}