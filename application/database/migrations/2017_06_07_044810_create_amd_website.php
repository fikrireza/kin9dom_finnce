<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmdWebsite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amd_website', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website')->nullable();
            $table->string('company')->nullable();
            $table->string('brief')->nullable();
            $table->text('address')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('google_map_url')->nullable();
            $table->integer('actor')->default(1);
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
        Schema::dropIfExists('amd_website');
    }
}
