<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('about_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('active');
            $table->string('img', 255);
            $table->integer('language');
            $table->string('header', 255);
            $table->string('content', 3000);
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('about_pages');
    }
}
