<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('title');
            $table->string('header');
            $table->string('description');
            $table->string('og_locale');
            $table->string('og_type');
            $table->string('og_title');
            $table->string('og_description');
            $table->string('og_url');
            $table->string('og_image');
        });

        Artisan::call('db:seed', [
            '--class' => SeoTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
