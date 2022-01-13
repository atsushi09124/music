<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');

            $table
            ->unsignedInteger('user_id');
            $table
            ->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->string('name');

            $table->string('main_key');

            $table->string('main_scale');

            $table->string('progress_chord')->nullable();

            $table->string('in_chord')->nullable();

            $table->string('A_chord')->nullable();

            $table->string('B_chord')->nullable();

            $table->string('main_chord')->nullable();

            $table->string('C_chord')->nullable();

            $table->string('out_chord')->nullable();

            $table->string('body');
            
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
        Schema::dropIfExists('post');
    }
}
