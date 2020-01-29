<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelHasTypeTable extends Migration
{
    public function up()
    {
        Schema::create('model_has_type', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigInteger('car_model_id')->unsigned();
            $table->foreign('car_model_id')->references('id')->on('car_model');
            $table->bigInteger('car_type_id')->unsigned();
            $table->foreign('car_type_id')->references('id')->on('car_type');
        });
    }
}
