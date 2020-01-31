<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCityTable extends Migration
{
    public function up(){
        Schema::create('city', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->string('title_ru');
            $table->string('title_en');
        });
        Artisan::call('db:seed', [
            '--class' => CityTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
