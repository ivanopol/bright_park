<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarTypeTable extends Migration
{
    public function up()
    {
        Schema::create('car_type', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('title_en')->nullable();
            $table->string('title_ru')->nullable();
        });
    }
}
