<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealOfDay extends Model
{
    protected $table = "meal_of_day";

    public function meal()
    {
        return $this->belongsTo('App\Meal');
    }

    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}