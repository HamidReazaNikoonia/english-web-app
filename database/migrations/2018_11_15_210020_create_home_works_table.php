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
            $table->string('user_name')->nullable();
            $table->string('user_family')->nullable();
            $table->string('email')->nullable();
            $table->string('telegram')->nullable();
            $table->string('mobile')->nullable();
            $table->string('send_via')->nullable();
            $table->string('details')->nullable();
            $table->string('type')->nullable();
            $table->string('kind')->nullable();
            $table->string('input')->nullable();
            $table->string('result_input')->nullable();
            $table->boolean('visited');
            $table->string('invoice_id')->nullable();
            $table->float('price')->nullable();
            $table->string('status');
            $table->boolean('user_upload_successfull')->nullable();
            $table->boolean('upload_user_result')->nullable();
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
