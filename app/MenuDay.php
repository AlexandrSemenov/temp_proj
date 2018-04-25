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
        return $this->belongsToMany('App\Meal', 'menu_day_meal');
    }
}