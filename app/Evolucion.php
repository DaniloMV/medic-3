<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    protected $table = 'evoluciones';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fecha'];
    

    

    
    public function evoluciones()
    {
        return $this->belongsTo('medic\Paciente');
    }
}
