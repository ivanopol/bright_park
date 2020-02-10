<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_prices', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('car_type_id')->unsigned()->index();
            $table->bigInteger('car_model_id')->unsigned()->index();
            $table->foreign('car_type_id')->references('id')->on('car_types');
            $table->foreign('car_model_id')->references('id')->on('car_models');
            $table->integer('price');
            $table->integer('special_price');
        });

        Artisan::call('db:seed', [
            '--class' => CarPricesTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_prices');
    }
}
