<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            


            
            $table->text('img')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->integer('codePostalMaroc');
            $table->tinyInteger('status');
            $table->tinyInteger('rent')->nullable();
            $table->integer('square')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->integer('roomNumber')->nullable();
            $table->bigInteger('lang')->nullable();
            $table->bigInteger('lat')->nullable();
            $table->string('smallDisc', 160)->nullable();
            $table->text('largDisc')->nullable();
            $table->tinyInteger('carModel')->nullable();
            $table->tinyInteger('carCarb')->nullable();

            $table->tinyInteger('thingKind')->nullable();
            

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
        //
        Schema::dropIfExists('buildings');
    }
}
