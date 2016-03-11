<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author_id');
            $table->string('event_name', 500);
            $table->string('ticket_price');
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('contact_person');
            $table->string('image_poster');
            $table->string('location');
            $table->string('more_info', 500);
            $table->boolean("is_active");
            $table->integer("viewer");
            $table->longText('about');
            $table->string('slug_url', 500);
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
        Schema::drop('events');
    }
}
