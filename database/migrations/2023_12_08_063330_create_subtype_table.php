<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtypes', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255)->required;
            $table->unsignedBigInteger('id_subtype');
            $table->string('subtype', 255)->required;
            $table->timestamps();

            $table->foreign('id_subtype')->references('id')->on('types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtype');
    }
};
