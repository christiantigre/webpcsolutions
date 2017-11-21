<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titletemplate',191)->nullable();
            $table->string('sectioncolor',10)->nullable();
            $table->string('colorfirt',10)->nullable();
            $table->string('colorsecond',10)->nullable();
            $table->string('colorthird',10)->nullable();
            $table->string('colorfondo',10)->nullable();
            $table->string('colortext1',10)->nullable();
            $table->string('colortext2',10)->nullable();
            $table->string('colortext3',10)->nullable();
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
        Schema::drop('templates');
    }
}
