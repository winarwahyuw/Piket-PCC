@extends('master')

@section('content')
    <div class="container">
        {{-- Form tambah Piket start --}}
    <form action="{{ url('update/' .$piket->id_piket)}}" method="POST">
            @csrf
            {{ method_field('PUT')}}

            {{-- jabatan --}}
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" value="JABATAN" disabled>
            </div>

            {{-- nama --}}
            <div class="form-group">
                <label for="nim">Nama</label>
            <input id="nama" class="form-control" name="nama" value="{{ $piket->nama}}" disabled>
            </div>
            
            {{-- mulai piket --}}
            <div class="form-group">
                <label for="mulai_piket">Mulai Piket</label>
            <input type="datetime" class="form-control" id="mulai_piket" name="mulai_piket" value="{{ $piket->mulai_piket}}" disabled>
            </div>

            {{-- selesai piket --}}
            <div class="form-group">
                <label for="selesai_piket">Selesai Piket</label>
                <input class="form-control" type="datetime" name="selesai_piket" id="selesai_piket" value="{{ gmdate('H:i:s', (time() + (60 * 60 * 7)))}}" disabled>
            </div>

            {{-- Aktivitas --}}
            <div class="form-group">
                <label for="aktivitas">Aktivitas</label>
            <input class="form-control" type="text" name="aktivitas" id="aktivitas" value="{{ $piket->aktivitas}}" required>
            </div>

            {{-- modal footer --}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

            <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
@endsection
