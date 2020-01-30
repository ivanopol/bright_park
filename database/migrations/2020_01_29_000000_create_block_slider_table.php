<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockSliderTable extends Migration
{
    public function up()
    {
        Schema::create('block_slider', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('block_id');
            $table->string('text');
            $table->string('image');
            $table->integer('number');
        });

        Artisan::call('db:seed', [
            '--class' => BlockSliderTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_slider');
    }
}