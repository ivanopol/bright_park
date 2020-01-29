<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCityTable extends Migration
{
    public function up(){
        Schema::create('city', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('title_ru');
            $table->string('title_en');
        });
    }
}
