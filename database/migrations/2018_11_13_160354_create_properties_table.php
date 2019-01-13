<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('area', 6, 2);
            $table->unsignedInteger('cadastral_number');
            $table->unsignedInteger('property_type_id');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->unsignedInteger('cadastral_municipality_id');
            $table->foreign('cadastral_municipality_id')->references('id')->on('cadastral_municipalities')->onDelete('cascade');
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
        Schema::drop('properties');
    }
}
