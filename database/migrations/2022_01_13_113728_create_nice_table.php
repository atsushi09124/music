<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nice', function (Blueprint $table) {
            $table->id();

            $table
            ->unsignedInteger('post_id');
            $table
            ->foreign('post_id')->references('id')->on('post')
            ->onUpdate('CASCADE')->onDelete('CASCADE');

            $table
            ->unsignedInteger('user_id');
            $table
            ->foreign('user_id')->references('id')->on('users')
            ->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->integer('flg')->default(0);

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
        Schema::dropIfExists('nice');
    }
}
