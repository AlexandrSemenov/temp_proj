<?php

namespace App\Reposotories\Meal;

use App\Meal;
use App\Reposotories\Repository;
use Illuminate\Http\Request;

class MealRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new Meal());
    }

    public function search(Request $request)
    {
        $query = $this->model::orderByDesc('id');

        if ($request->has('name'))
            $query->where('name', 'like', '%' . $request->get('name') . '%');

        if ($request->has('calories'))
            $query->where('calories', $request->get('calories'));

        if ($request->has('weight'))
            $query->where('weight', $request->get('weight'));

        $meals = $query->paginate(20);

        var_dump($meals); die();
    }
}