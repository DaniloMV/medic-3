<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Vocales extends Model
{
    protected $table = 'test_vocales';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fechahora'];
    
    public function test_vocales()
    {
        return $this->belongsTo('medic\Paciente');
    }
}
