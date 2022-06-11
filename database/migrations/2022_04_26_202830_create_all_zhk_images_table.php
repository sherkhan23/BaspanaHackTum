<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllZhkImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_zhk_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->bigInteger('zhk_id')->unsigned();
            $table->foreign('zhk_id')
                ->references('id')
                ->on('allzhks')
                ->onDelete('cascade');
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
        Schema::dropIfExists('all_zhk_images');
    }
}
