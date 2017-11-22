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
            $table->string('colorfirst',10)->nullable();
            $table->string('colorsecond',10)->nullable();
            $table->string('colorthird',10)->nullable();
            $table->string('colorfondo',10)->nullable();
            $table->string('colortextnavone',10)->nullable();
            $table->string('colortextnavsec',10)->nullable();
            $table->string('colortextnavact',10)->nullable();
            $table->string('colortexttitles',10)->nullable();
            $table->string('colortextsubtitles',10)->nullable();
            $table->string('colortextparagraph',10)->nullable();
            $table->string('colortextlink',10)->nullable();
            $table->boolean('activo',1)->default(0)->nullable();
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
