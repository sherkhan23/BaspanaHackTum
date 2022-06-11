<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZhkDetailsToAllzhksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('allzhks', function (Blueprint $table) {
            // сюда брат добавь все детейл ЖК типа застройщик все такое
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('allzhks', function (Blueprint $table) {
            //
        });
    }
}
