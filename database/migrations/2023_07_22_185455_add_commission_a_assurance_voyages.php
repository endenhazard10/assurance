<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommissionAAssuranceVoyages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assurance_voyages', function (Blueprint $table) {
            $table->bigInteger('commissions_apporteur')->nullable();
            $table->bigInteger('commissions_accessoires')->nullable();
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
            //
        });
    }
}
