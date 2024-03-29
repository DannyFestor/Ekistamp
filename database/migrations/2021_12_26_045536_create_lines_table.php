<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->references('id')->on('prefectures');
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->string('name');
            $table->string('hiragana')->nullable();
            $table->string('katakana')->nullable();
            $table->string('romaji')->nullable();
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
        Schema::dropIfExists('lines');
    }
}
