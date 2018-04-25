<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function menu_days()
    {
        return $this->hasMany('App\MenuDay');
    }

    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}