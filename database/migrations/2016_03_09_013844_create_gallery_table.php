<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->increments('id');
            $table->string("data_id", 400);
            $table->string("name", 400);
            $table->string("image_1", 400);
            $table->string("image_2", 400);
            $table->string("image_3", 400);
            $table->string("image_4", 400);
            $table->string("image_5", 400);
            $table->string("image_6", 400);
            $table->string("image_7", 400);
            $table->string("image_8", 400);
            $table->string("image_9", 400);
            $table->string("image_10", 400);
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
        Schema::drop('gallery');
    }
}
