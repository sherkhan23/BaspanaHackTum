<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllzhksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allzhks', function (Blueprint $table) {
            $table->id();
            $table->string('zhkName');
            $table->integer('price');
            $table->text('picture');
            $table->double('new_price');
            $table->text('builder');
            $table->text('address');
            $table->text('link_builder');
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
        Schema::dropIfExists('allzhks');
    }
}
