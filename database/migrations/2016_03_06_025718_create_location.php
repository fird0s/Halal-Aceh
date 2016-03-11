<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_location', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->string('location');
            $table->longText('about');
            $table->string("map_latitude");
            $table->string('map_longtitude');
            $table->string('iframe_video');
            $table->string('slug_url')->unique();
            $table->integer('viewer');
            $table->string('facilities');
            $table->integer('district_id');
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
        Schema::drop('tourist_location');
    }
}
