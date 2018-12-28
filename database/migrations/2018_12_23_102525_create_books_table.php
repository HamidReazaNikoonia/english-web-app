<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('short_details')->nullable();
            $table->text('details')->nullable();
            $table->float('price')->nullable();
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->text('details_1')->nullable();
            $table->text('details_2')->nullable();
            $table->text('details_3')->nullable();
            $table->float('disscount')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('back_image')->nullable();
            $table->string('images')->nullable();
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
