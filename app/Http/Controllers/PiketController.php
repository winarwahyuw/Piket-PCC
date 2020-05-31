<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Table;

use App\Piket;
use App\User;
use App\Jabatan;
use Carbon\Traits\Timestamp;

use function Ramsey\Uuid\v1;

class PiketController extends Controller
{
    public function tampilData(){
        //menampilkan data di dropdown modal
        $jabatan=DB::table('jabatan')->get();
        $nama   =DB::table('user')->get();

        //join Nama dan Jabatan
        // $join=DB::table('user')
        //         ->leftjoin('jabatan','user.kode_jabatan','=','jabatan.kode_jabatan')
        //         ->select('user.nama','jabatan.nama_jabatan')
        //         ->get();

        // $kode_jabatan=User::get('kode_jabatan');
        // $nama_jabatan=Jabatan::where('jabatan.kode_jabatan', '=', 'user.kode_jabatan')->get();

        //menampilkan data di table list piket
        $list_data_piket    = Piket::all();

        // $list_data_piket->nama_jabatan=$nama_jabatan;
        return view('index',
                    compact('list_data_piket', 'jabatan', 'nama'));
    }

    public function store(Request $request){
        date_default_timezone_set('Asia/Jakarta');
        $mulai_piket=date('Y-m-d H:i:s', time());

        $piket = new Piket;
        $piket->nim=$request->nim;
        $piket->mulai_piket=$mulai_piket;
        $piket->aktivitas=$request->aktivitas;
        $piket->save();

        return redirect('index');
    }

    public function editData($id){
        $piket      =Piket::find($id);
        $piket->nama=$piket->user->nama;
        return view('edit', compact('piket'));
    }

    public function updateData($id, Request $request){
        $piket=Piket::find($id);

        $piket->selesai_piket=gmdate('H:i:s', (time() + (60 * 60 * 7)));
        $piket->aktivitas=$request->aktivitas;
        $piket->save();

        return redirect('index');
    }
}
