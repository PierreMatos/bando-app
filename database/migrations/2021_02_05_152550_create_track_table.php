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
            $table->string('slug');
            $table->integer('order');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('duration');
            $table->longText('lyric')->nullable();
            $table->string('file');
            $table->string('image')->nullable();
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
