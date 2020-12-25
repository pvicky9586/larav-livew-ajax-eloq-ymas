<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            
            $table->foreign('category_id')->references('id')->on('categories')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('set null')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('category_tag');
    }
}
