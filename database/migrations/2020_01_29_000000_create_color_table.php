<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateColorTable extends Migration
{
    public function up()
    {
        Schema::create('color', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('type_id')->nullable();
            $table->bigInteger('model_id')->nullable();
            $table->string('title');
            $table->string('image');
            $table->string('class');
            $table->boolean('is_active');
        });
    }
}
