<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('img_mobile');
            $table->string('img_desktop');
            $table->string('title');
            $table->text('description');
            $table->integer('count');
            $table->boolean('is_active');
            $table->integer('city_id');
            $table->integer('car_model_id');
            $table->integer('car_type_id');
            $table->string('utm_tags');
        });

        Artisan::call('db:seed', [
            '--class' => SpecialOffersTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('special_offers');
    }
}
