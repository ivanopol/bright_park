<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockSlider_table extends Migration
{
    public function up()
    {
        Schema::create('block_slider', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('block_id');
            $table->string('text');
            $table->integer('image');
            $table->integer('number');
        });
    }
}
