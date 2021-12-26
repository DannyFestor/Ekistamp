<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stamps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('station_id')->references('id')->on('stations');
            $table->foreignId('company_id')->references('id')->on('companies');
            $table->string('name')->nullable();
            $table->string('name_eng')->nullable();
            $table->text('description')->nullable();
            $table->text('description_eng')->nullable();
            $table->boolean('is_approved')->default(FALSE);
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
        Schema::dropIfExists('stamps');
    }
}
