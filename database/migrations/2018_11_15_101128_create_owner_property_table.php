<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_property', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('percentage', 3, 2);
            $table->unsignedInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->unsignedInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties');
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
        Schema::drop('owner_property');
    }
}
