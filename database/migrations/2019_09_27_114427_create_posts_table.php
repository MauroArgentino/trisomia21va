<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 190);
            $table->string('slug', 190);
            $table->mediumText('contenido');
            $table->enum('estado', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->unsignedBigInteger('user_create_id');
            $table->unsignedBigInteger('user_modified_id')->default(0);
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
        Schema::dropIfExists('posts');
    }
}
