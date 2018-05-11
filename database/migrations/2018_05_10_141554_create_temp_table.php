<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('temp')->insert([
            ['name' => 'Понедельник'],
            ['name' => 'Вторник'],
            ['name' => 'Среда'],
            ['name' => 'Четверг'],
            ['name' => 'Пятница'],
            ['name' => 'Суббота'],
            ['name' => 'Воскресенье'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp');
    }
}
