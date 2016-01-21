<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table = 'sectores';

    public function clientes(){
        return $this->hasMany('App\Cliente','sector_id','id');
    }
}
