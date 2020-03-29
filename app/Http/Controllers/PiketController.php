<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

class PiketController extends Controller
{
    public function tampilData(){
        $jabatan=DB::table('jabatan')->get();
        $nama   =DB::table('user')->get();

        return view('coba',['jabatan'=> $jabatan,
                            'nama'=> $nama]);

    }
}
