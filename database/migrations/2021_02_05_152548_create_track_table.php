<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->string('name');
            $table->string('duration');
            $table->longText('lyric');
            $table->string('link');
            $table->integer('album_id')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('album_id')->references('id')->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('track');
    }
}
