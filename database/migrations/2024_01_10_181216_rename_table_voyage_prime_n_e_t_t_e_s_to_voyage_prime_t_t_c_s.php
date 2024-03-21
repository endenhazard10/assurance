<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameTableVoyagePrimeNETTESToVoyagePrimeTTCs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('voyage_prime_n_e_t_t_e_s', 'voyage_prime_t_t_c_s');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('voyage_prime_t_t_c_s', 'voyage_prime_n_e_t_t_e_s');
    }
}
