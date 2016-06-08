<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPackage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_package', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->string('package_duration');
            $table->string('tour_code');
            $table->string('description');
            $table->string('group_size');
            $table->string('price_includes');
            $table->string('price_excludes');
            $table->string('location');
            $table->string('itinerary');
            $table->string('images');
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
        Schema::drop('tour_package');
    }
}
