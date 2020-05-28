<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

use App\Piket;

class PiketController extends Controller
{
    public function tampilData(){
        //menampilkan data di dropdown modal
        $jabatan=DB::table('jabatan')->get();
        $nama   =DB::table('user')->get();
        $tanggel=DB::table('piket')->get();

        //menampilkan data di table list piket
        $list_data_piket =  Piket::all();
        return view('index',
                    ['jabatan'=> $jabatan,
                        'nama'=> $nama],
                    compact('list_data_piket'));

    }

    public function store(Request $request){
        $piket = new Piket;
        $piket->nim=$request->nim;
        $piket->mulai_piket=$request->mulai_piket;
        // $piket->selesai_piket=$request->gettimeofday();

        $piket->save();

        return redirect('index');
    }
}
