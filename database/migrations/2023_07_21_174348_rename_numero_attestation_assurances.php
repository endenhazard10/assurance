<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNumeroAttestationAssurances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assurances', function (Blueprint $table) {
            $table->renameColumn('numero_attestation', 'numero_police');
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
            $table->renameColumn('numero_police', 'numero_attestation');
        });
    }
}
