<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';

    public function userJabatan(){
        return $this->belongsTo('App\Jabatan', 'kode_jabatan');
    }

    public function userPiket(){
        return $this->hasOne('App\Piket', 'nim');
    }
}
