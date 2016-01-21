<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primaryKey = 'rut';

    public function sector(){
        return $this->belongsTo('App\Sector','sector_id','id');
    }

    public function proyectos(){
        return $this->hasMany('Proyecto');
    }
}
