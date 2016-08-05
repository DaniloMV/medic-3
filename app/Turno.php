<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fecha'];

    //return $this->belongsTo('medic\Paciente');
    
    public function turnos()
    {
        return $this->belongsTo('medic\Paciente');
    }

}
