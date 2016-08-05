<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    protected $table = 'antecedentes';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fecha'];
    
    public function antecedentes()
    {
        return $this->belongsTo('medic\Paciente');
    }

}
