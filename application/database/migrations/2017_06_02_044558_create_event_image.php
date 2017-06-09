<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_event_image', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_event');
            $table->string('title');
            $table->text('image');
            $table->integer('priority')->default(0);
            $table->integer('actor');
            $table->boolean('flag_publish')->default(1);
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
        Schema::dropIfExists('amd_event_image');
    }
}
