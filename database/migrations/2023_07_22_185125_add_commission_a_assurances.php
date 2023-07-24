<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommissionAAssurances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assurances', function (Blueprint $table) {
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
        Schema::table('assurances', function (Blueprint $table) {
            //
        });
    }
}
