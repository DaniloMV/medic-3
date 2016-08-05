<?php

namespace medic;

use Illuminate\Database\Eloquent\Model;

class Dictado extends Model
{
    protected $table = 'test_dictado';
    protected $primaryKey = 'id';
    protected $guarded = array('id');
    protected $fillable = array('paciente_id');
    protected $dates = ['fechahora'];
    
    public function test_dictado()
    {
        return $this->belongsTo('medic\Paciente');
    }
}
