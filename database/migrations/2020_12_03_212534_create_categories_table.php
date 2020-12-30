<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('slug')->nullable;
            $table->text('body')->nullable;
=======
=======
>>>>>>> Eloquent
            $table->text('detall');
            
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')
            ->onDelete('set null')
            ->onUpdate('cascade');

<<<<<<< HEAD
>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======
>>>>>>> Eloquent
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
        Schema::dropIfExists('categories');
    }
}
