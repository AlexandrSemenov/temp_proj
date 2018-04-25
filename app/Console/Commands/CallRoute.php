<?php

namespace App\Console\Commands;


use App\Meal;
use App\MealOfDay;
use App\Menu;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CallRoute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'route:call';

    protected $name = 'route:call';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        $menu_day = Menu::find(1)->menu_days()->where('week_day_id', '=', 2)->first();
//
//        foreach ($menu_day->meals as $meal) {
//            echo "meal: {$meal->name}, calories: {$meal->calories}" . PHP_EOL;
//        }

        try{
            $menu_day = Menu::where('program_id', '=', 1)->where('subscription_plan_id', '=', 3)->first()->menu_days->where('week_day_id', '=', 2)->first();

            foreach ($menu_day->meals as $meal) {
                echo "meal: {$meal->name}, calories: {$meal->calories}" . PHP_EOL;
            }
        }catch (\ErrorException $e)
        {
            echo "ничего не найдено" . PHP_EOL;
        }

    }
}
