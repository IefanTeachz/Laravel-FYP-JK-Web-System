<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vservice_id')->nullable();
            $table->string('name');
            $table->double('price');
            $table->string('phone');
            $table->string('address');
            $table->text('description');
            $table->text('image');
            $table->string('fb')->nullable();
            $table->string('insta')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
