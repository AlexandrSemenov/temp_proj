<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuBundlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_bundles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->integer('subscription_plan_id')->unsigned();
            $table->integer('week_day_id')->unsigned();
            $table->integer('price')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_bundles');
    }
}
