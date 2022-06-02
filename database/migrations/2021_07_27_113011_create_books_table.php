<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('editeur_id');
            $table->unsignedBigInteger('langue_id');
            $table->longText('description');
            $table->integer('page');
            $table->unsignedBigInteger('auteur_id');
            $table->unsignedBigInteger('pays_id');
            $table->integer('prix');
            $table->string('photo')->nullable();
            $table->string('document');

            $table->foreign('pays_id')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');

            $table->foreign('auteur_id')
            ->references('id')
            ->on('authors')
            ->onDelete('cascade');

            $table->foreign('langue_id')
            ->references('id')
            ->on('languages')
            ->onDelete('cascade');

            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreign('editeur_id')
            ->references('id')
            ->on('editors')
            ->onDelete('cascade');

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
        Schema::dropIfExists('books');
    }
}
