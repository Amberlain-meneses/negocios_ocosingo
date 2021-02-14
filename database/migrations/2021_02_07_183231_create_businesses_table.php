<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('adress');
            $table->string('location');
            $table->string('schedule');
            $table->string('phone');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('category_id');
           // $table->unsignedBigInteger('user_id');
            $table->string('references');
            $table->string('owner');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('service_id')->references('id')->on('type_services');
            $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('business');
    }
}
