<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('codigop', function (Blueprint $table) {

            $table->string('codigo');
            $table->string('asenta');
            $table->string('tipo_asenta');
            $table->string('mnpio');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('cp');
            $table->string('c_estado');
            $table->string('c_oficina');
            $table->string('c_cp');
            $table->string('c_tipo_asenta');
            $table->string('c_mnpio');
            $table->string('id_asenta_cpcons');
            $table->string('zona');
            $table->string('c_cve_ciudad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('codigop');
    }
}
