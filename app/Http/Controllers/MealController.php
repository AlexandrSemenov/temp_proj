<?php

namespace App\Http\Controllers;

use App\Reposotories\Meal\MealRepository;
use Illuminate\Http\Request;

class MealController extends Controller
{
    protected $meals_repository;

    public function __construct()
    {
        $this->meals_repository = new MealRepository();
    }

    public function search(Request $request)
    {
        return $this->meals_repository->search($request);
    }
}