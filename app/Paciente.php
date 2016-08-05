<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $guarded = array('id');
    
    public function antecedentes() 	{ 	return $this->hasMany('medic\Antecedente'); }
    public function turnos() 		{ 	return $this->hasMany('medic\Turno'); }
    public function informes() 		{ 	return $this->hasMany('medic\Informe'); }
    public function evoluciones() 	{ 	return $this->hasMany('medic\Evolucion'); }
    public function test_vocales() 	{ 	return $this->hasMany('medic\Vocales'); }
    public function test_dictado() 	{ 	return $this->hasMany('medic\Dictado'); }
}
