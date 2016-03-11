<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->string('full_address');
            $table->string("phone_number");
            $table->longText("about_me");
            $table->string("photo_profile");
            $table->integer("district");
            $table->boolean("is_active");
            $table->boolean("gender");
            $table->string("map_latitude");
            $table->string('map_longtitude');
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
        Schema::drop('user_profile');
    }
}
