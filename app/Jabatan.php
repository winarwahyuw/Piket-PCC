<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table='jabatan';

    public function jabatanUser(){
        return $this->hasOne('App\User', 'kode_jabatan');
    }
}
