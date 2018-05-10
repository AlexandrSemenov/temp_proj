<?php

namespace App\Http\Controllers;

use App\Reposotories\Menu\MenuRepository;

class MainController extends Controller
{

    protected $menu_repository;

    public function __construct()
    {
        $this->menu_repository = new MenuRepository();
    }

    public function index()
    {
        try {

            $meals = $this->menu_repository->list_meals_menu_day(1, 1);

            return view('main.index', ['meals' => $meals]);

        } catch (\ErrorException $e) {
            echo "ничего не найдено" . PHP_EOL;
        }
    }

    public function meals_list()
    {
        $menu = $this->menu_repository->first(1);
        $current_day = date('N', time());

        $menus = $this->menu_repository->all();

        return view('main.temp', ['menus' => $menus, 'menu_id' => $menu->id, 'menu_days' => $menu->menu_days, 'current_day' => $current_day]);
    }

    public function days_list_json()
    {
        $menu = $this->menu_repository->first(1);
        $current_day = date('N', time());

        $menus = $this->menu_repository->all();

        $days_names = [];

        foreach($menu->menu_days as $day){
            $days_names[] = $day->week_day()->first()->name;
        }


        return response()->json(
            [
                'menus' => $menus,
                'menu_id' => $menu->id,
                'menu_days' => $menu->menu_days,
                'days_names' => $days_names,
                'current_day' => $current_day
            ]
        );
    }

    public function meals_list_json($menu_id, $day_id)
    {
        $meals = $this->menu_repository->list_meals_menu_day($menu_id, $day_id);
        return response()->json($meals);
    }

    public function first_menu_json()
    {
        $first_menu = $this->menu_repository->first_menu();
        return response()->json($first_menu);
    }

    public function start_menu_json()
    {
        return response()->json($this->menu_repository->start_menu());
    }

    public function select_menu_json($id)
    {
        return response()->json($this->menu_repository->select_menu($id));
    }
}
