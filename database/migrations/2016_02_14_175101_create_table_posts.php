<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->longText('description');
            $table->string('url')->unique();
            $table->string('image')->unique();
            $table->integer('id_categorie');
            $table->integer('id_sous_categorie');
            $table->integer('id_type_video');
            $table->integer('id_etat');
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
        //
    }
}
