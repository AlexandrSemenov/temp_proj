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

            $meals = $this->menu_repository->MealsOfMenuForDay(1, 2);

            return view('main.index', ['meals' => $meals]);

        } catch (\ErrorException $e) {
            echo "ничего не найдено" . PHP_EOL;
        }
    }

    public function temp()
    {
        return view('main.temp');
    }
}
