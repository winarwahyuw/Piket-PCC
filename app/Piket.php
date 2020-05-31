<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piket extends Model
{
    protected $table='piket';
    protected $fillable=['id_piket','nim', 'mulai_piket', 'selesai_piket', 'aktivitas'];
    protected $primaryKey='id_piket';

    public function user(){
        return $this->belongsTo('App\User', 'nim');
    }
}
