<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->references('id')->on('prefectures');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('postcode_id')->references('id')->on('postcodes');
            $table->string('name');
            $table->string('romaji');
            $table->string('hiragana');
            $table->string('katakana');
            $table->string('katakana_half');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('streets');
    }
}
