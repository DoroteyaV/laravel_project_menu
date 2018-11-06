<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDrinkIdToMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->integer('drink_id')->unsigned()->after('id');
            $table->foreign('drink_id')->references('id')->on('drinks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign('menus_drink_id_foreign');
            $table->dropColumn('drink_id');
        });
    }
}
