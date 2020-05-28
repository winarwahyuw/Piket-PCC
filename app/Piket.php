<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piket extends Model
{
    protected $table='piket';

    public function piketUser(){
        return $this->belongsTo('App\User', 'nim');
    }
}
