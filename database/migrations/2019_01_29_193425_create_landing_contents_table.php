<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('sub_title');
            $table->string('text_1_title');
            $table->text('text_1_content');
            $table->string('text_2_title');
            $table->text('text_2_content');
            $table->string('text_3_title');
            $table->text('text_3_content');
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
        Schema::dropIfExists('landing_contents');
    }
}
