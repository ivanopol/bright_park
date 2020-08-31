<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accessories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->collation = 'utf8mb4_general_ci';
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('text');
            $table->text('text_preview');
            $table->text('text_short');
            $table->string('preview');
            $table->string('slug');
        });

       Artisan::call('db:seed', [
            '--class' => AccessoriesTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessories');
    }
}
