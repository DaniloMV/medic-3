<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    protected $table = 'informes';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fecha'];
    
    public function informes()
    {
        return $this->belongsTo('medic\Paciente');
    }
}
