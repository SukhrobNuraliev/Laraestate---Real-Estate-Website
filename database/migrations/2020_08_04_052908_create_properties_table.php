<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('name');
            $table->string('phone');
            $table->string('title');
            $table->integer('price');
            $table->integer('size');
            $table->string('location');
            $table->text('description');
            $table->string('short_description');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->string('garages')->nullable();

            $table->string('f1')->nullable();
            $table->string('f2')->nullable();
            $table->string('f3')->nullable();
            $table->string('f4')->nullable();
            $table->string('f5')->nullable();
            $table->string('f6')->nullable();
            $table->string('f7')->nullable();
            $table->string('f8')->nullable();
            $table->string('f9')->nullable();
            $table->string('f10')->nullable();

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
        Schema::dropIfExists('properties');
    }
}
