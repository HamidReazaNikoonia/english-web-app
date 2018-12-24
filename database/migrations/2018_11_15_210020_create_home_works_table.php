<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('user_family');
            $table->string('email');
            $table->string('telegram')->nullable();
            $table->string('mobile');
            $table->string('send_via');
            $table->string('details')->nullable();
            $table->string('type');
            $table->string('kind');
            $table->string('input')->nullable();
            $table->boolean('visited');
            $table->string('invoice_id')->nullable();
            $table->float('price')->nullable();
            $table->string('status');
            $table->boolean('payment_status');
            $table->boolean('checked_result');
            $table->boolean('call_to_user');
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
        Schema::dropIfExists('home_works');
    }
}
