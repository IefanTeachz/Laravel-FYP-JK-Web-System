<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendorprofile', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('address')->nullable;
            $table->integer('poscode')->nullable;
            $table->string('state')->nullable;
            $table->integer('phoneNumber')->nullable;
            $table->string('image')->nullable;
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
        Schema::dropIfExists('vendorprofile');
    }
}
