<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';
    protected $fillable=['nim', 'nama', 'kode_jabatan', 'periode'];
    protected $primaryKey='nim';

    public function jabatan(){
        return $this->belongsTo('App\Jabatan', 'kode_jabatan');
    }

    public function user(){
        return $this->hasMany('App\Piket', 'nim');
    }

}
