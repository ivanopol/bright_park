<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactTable extends Migration
{
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('fb_url');
            $table->string('instagram_url');
            $table->string('vk_url');
            $table->string('youtube_url');
            $table->string('ok_url');
        });
    }
}
