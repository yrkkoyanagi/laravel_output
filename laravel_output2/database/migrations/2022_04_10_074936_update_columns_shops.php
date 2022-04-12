<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnsShops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('use');
            $table->dropColumn('food');
            $table->integer('party');
            $table->integer('small');
            $table->integer('girls');
            $table->integer('seafood');
            $table->integer('brandcow');
            $table->integer('localsake');
            $table->integer('craftbeer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->integer('use');
            $table->integer('food');
            $table->dropColumn('party');
            $table->dropColumn('small');
            $table->dropColumn('girls');
            $table->dropColumn('seafood');
            $table->dropColumn('brandcow');
            $table->dropColumn('localsake');
            $table->dropColumn('craftbeer');
        });
    }
}
