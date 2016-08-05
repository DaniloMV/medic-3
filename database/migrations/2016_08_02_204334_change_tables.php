<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            
            $table->string('vive_con')->nullable();
            $table->text('embarazo')->nullable();
            $table->text('parto')->nullable();
            $table->text('lactancia')->nullable();
            $table->text('comunicacion')->nullable();
            $table->text('juego')->nullable();
            $table->text('enfermedades')->nullable();
            $table->text('cambios')->nullable();

            $table->date('fecha_nacimiento')->nullable();
            $table->string('lugar_nacimiento')->nullable();
            $table->string('escolaridad')->nullable();
            $table->string('motivos')->nullable();
            $table->string('diagnostico')->nullable();
            $table->boolean('certificado')->nullable();
            $table->boolean('terapia_ps')->nullable();
            $table->integer('terapia_ps_frecuencia')->nullable();
            $table->boolean('terapia_psp')->nullable();
            $table->integer('terapia_psp_frecuencia')->nullable();
            $table->boolean('terapia_psm')->nullable();
            $table->integer('terapia_psm_frecuencia')->nullable();
            $table->boolean('terapia_mt')->nullable();
            $table->integer('terapia_mt_frecuencia')->nullable();
            $table->boolean('terapia_kn')->nullable();
            $table->integer('terapia_kn_frecuencia')->nullable();
            $table->boolean('terapia_to')->nullable();
            $table->integer('terapia_to_frecuencia')->nullable();
            $table->boolean('terapia_otra')->nullable();
            $table->integer('terapia_otra_frecuencia')->nullable();
            $table->string('medicacion')->nullable();

            $table->date('mama_fecha_nacimiento')->nullable();
            $table->string('mama_lugar_nacimiento')->nullable();
            $table->string('mama_dni')->nullable();
            $table->string('mama_direccion')->nullable();
            $table->string('mama_telefono')->nullable();
            $table->string('mama_ocupacion')->nullable();
            $table->string('mama_lugar_trabajo')->nullable();
            $table->string('mama_antecedentes')->nullable();

            $table->date('papa_fecha_nacimiento')->nullable();
            $table->string('papa_lugar_nacimiento')->nullable();
            $table->string('papa_dni')->nullable();
            $table->string('papa_direccion')->nullable();
            $table->string('papa_telefono')->nullable();
            $table->string('papa_ocupacion')->nullable();
            $table->string('papa_lugar_trabajo')->nullable();
            $table->string('papa_antecedentes')->nullable();
            
            $table->integer('hermanos')->nullable();
            $table->string('hermanos_nombres')->nullable();
            $table->string('hermanos_edades')->nullable();
            $table->string('hermanos_antecedentes')->nullable();
            

            $table->integer('mascotas')->nullable();
            $table->string('mascotas_tipo')->nullable();
            $table->string('mascotas_nombres')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
