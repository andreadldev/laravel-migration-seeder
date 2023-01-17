<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 80);
            $table->unsignedSmallInteger('train_number');
            $table->unsignedTinyInteger('number_of_carriages');
            $table->string('from', 80);
            $table->string('to', 80);
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->unsignedTinyInteger('platform');
            $table->boolean('on_time');
            $table->boolean('cancelled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
