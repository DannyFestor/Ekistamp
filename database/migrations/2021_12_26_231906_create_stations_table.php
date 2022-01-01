<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->references('id')->on('prefectures');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('street_id')->nullable()->references('id')->on('streets');
            $table->string('name');
            $table->string('hiragana');
            $table->string('katakana');
            $table->string('katakana_half')->nullable();
            $table->string('romaji');
            $table->string('memo');
            $table->double('latitude');
            $table->double('altitude');
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
        Schema::dropIfExists('stations');
    }
}
