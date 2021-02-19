<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('subtitle1')->nullable();
            $table->string('subtitle2')->nullable();            
            $table->longText('body')->nullable();
            $table->longText('image')->nullable();
            $table->string('listItem1')->nullable();
            $table->string('listItem2')->nullable();
            $table->string('listItem3')->nullable();
            $table->string('listItem4')->nullable();            
            $table->string('price', 5)->nullable();
            $table->boolean('is_active');
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
        Schema::dropIfExists('articles');
    }
}
