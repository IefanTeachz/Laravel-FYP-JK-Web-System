<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('address')->nullable;
            $table->integer('poscode')->nullable;
            $table->string('state')->nullable;
            $table->integer('phoneNumber')->nullable;
            $table->longText('partner')->nullable;
            $table->longText('wedDate')->nullable;
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
        Schema::dropIfExists('userprofile');
    }
}
