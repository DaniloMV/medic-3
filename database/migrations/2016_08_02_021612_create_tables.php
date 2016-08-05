<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('obrasocial')->nullable();
            $table->integer('dni')->nullable();
            $table->string('domicilio')->nullable();
            $table->integer('discapacidad')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('foto')->nullable();
            $table->string('nombre_padre')->nullable();
            $table->string('nombre_madre')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        Schema::create('turnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->dateTime('fechahora');
            $table->boolean('repite')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        Schema::create('test_vocales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->dateTime('fechahora')->nullable();
            $table->string('letra_a')->default('0')->nullable();
            $table->string('letra_u')->default('0')->nullable();
            $table->string('letra_e')->default('0')->nullable();
            $table->string('letra_i')->default('0')->nullable();
            $table->string('letra_o')->default('0')->nullable();
            $table->string('letra_s')->default('0')->nullable();
            $table->string('letra_r')->default('0')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        Schema::create('test_dictado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->dateTime('fechahora')->nullable();
            $table->string('oracion_1')->default('0')->nullable();
            $table->string('oracion_2')->default('0')->nullable();
            $table->string('oracion_3')->default('0')->nullable();
            $table->string('oracion_4')->default('0')->nullable();
            $table->string('oracion_5')->default('0')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });

        Schema::create('evoluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->date('fecha');
            $table->timestamps();
        });

        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('titulo')->nullable();
            $table->text('resumen')->nullable();
            $table->date('fecha');
            $table->timestamps();
        });

        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->string('titulo')->nullable();
            $table->text('resumen')->nullable();
            $table->string('foto')->nullable();
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientes');
    }
}
