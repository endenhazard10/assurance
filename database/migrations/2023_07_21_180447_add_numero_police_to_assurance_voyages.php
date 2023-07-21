<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumeroPoliceToAssuranceVoyages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assurance_voyages', function (Blueprint $table) {
            $table->integer('numero_police')->nullable();
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
            $table->dropColumn('numero_police');
        });
    }
}
