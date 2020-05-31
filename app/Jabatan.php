<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table='jabatan';
    protected $fillable=['kode_jabatan', 'nama_jabatan', 'keterangan'];
    protected $primaryKey='kode_jabatan';

    public function jabatan(){
        return $this->hasMany('App\User', 'kode_jabatan');
    }
}
