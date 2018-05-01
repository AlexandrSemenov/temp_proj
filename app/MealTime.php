<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    public function meals()
    {
        return $this->belongsToMany('App\Meal', 'menu_day_meal');
    }
}