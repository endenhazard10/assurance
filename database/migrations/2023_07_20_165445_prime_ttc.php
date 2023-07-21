<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrimeTtc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assurance_voyages', function (Blueprint $table) {
            $table->bigInteger('prime_ttc')->default(0);;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assurance_voyages', function (Blueprint $table) {
            $table->dropColumn('prime_ttc');
        });
    }
}
