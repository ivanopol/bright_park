<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewTable extends Migration
{
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('model_id')->nullable();
            $table->bigInteger('type_id')->nullable();
            $table->string('url');
            $table->string('quote');
            $table->string('author');
        });
    }
}
