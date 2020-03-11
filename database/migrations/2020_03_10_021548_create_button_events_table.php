<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButtonEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('button_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('button_id');
            $table->dateTime('timestamp');
            $table->string('href')->nullable();
            $table->string('location');
            $table->string('user_ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('button_events');
    }
}
