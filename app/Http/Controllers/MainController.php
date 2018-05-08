<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Reposotories\Menu\MenuRepository;

class MainController extends Controller
{

    protected $menu_repository;

    public function __construct(Menu $menu)
    {
        $this->menu_repository = new MenuRepository($menu);
    }

    public function index()
    {
        try {

            $meals = $this->menu_repository->MealsOfMenuForDay(1, 1);

            return view('main.index', ['meals' => $meals]);

        } catch (\ErrorException $e) {
            echo "ничего не найдено" . PHP_EOL;
        }
    }

    public function meals_list()
    {
        $menu = $this->menu_repository->first(1);
        $meals = $this->menu_repository->MealsOfMenuForDay(1, 1);

        return view('main.temp', ['menu_id' => $menu->id, 'menu_days' => $menu->menu_days, 'meals' => $meals]);
    }

    public function meals_list_json($menu_id, $day_id)
    {
        $meals = $this->menu_repository->MealsOfMenuForDay($menu_id, $day_id);
        return response()->json($meals);
    }
}
