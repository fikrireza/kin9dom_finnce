<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmdSocial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_social', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('link')->nullable();
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
        Schema::dropIfExists('amd_social');
    }
}
