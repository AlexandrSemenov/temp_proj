<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuDay extends Model
{
    public function menu()
    {
        return $this->belongsTo('App\Menu');
    }

    public function meals()
    {
        return $this->belongsToMany('App\Meal', 'week_day_meals');
    }

    public function week_day()
    {
        return $this->belongsTo('App\WeekDay');
    }

    public function meal_times()
    {
        return $this->belongsToMany('App\MealTime', 'week_day_meals');
    }
}