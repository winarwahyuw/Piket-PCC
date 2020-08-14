@extends('master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-piket">
            <span>Tambah Piket</span>
        </button>

        <!-- Start Modal -->
        <div class="modal fade" id="modal-tambah-piket" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title sub-judul" id="staticBackdropLabel">Tambah Piket</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    {{-- Form tambah Piket start --}}
                    <form action="{{ url('store')}}" method="POST">
                        @csrf
                        {{-- jabatan --}}
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select id="jabatan" name="jabatan" class="form-control">
                                @foreach ($jabatan as $jabatan)
                                <option value="{{$jabatan->kode_jabatan}}">{{ $jabatan->nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- nama --}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <select id="nim" class="form-control" name="nim">
                                @foreach ($nama as $nama)
                                    <option value="{{ $nama->nim }}"> {{ $nama->nama}}</option>
                                @endforeach

                            </select>
                        </div>

                        {{-- mulai piket --}}
                        <div class="form-group">
                            <label for="mulai_piket">Mulai Piket</label>
                            <input class="form-control" type="datetime" name="mulai_piket" id="mulai_piket" value="{{ gmdate('H:i:s', (time() + (60 * 60 * 7)))}}" disabled>
                        </div>

                        {{-- selesai piket --}}
                        <div class="form-group">
                            <label for="aktivitas">Aktivitas</label>
                        <input class="form-control" type="text" name="aktivitas" id="aktivitas" >
                        </div>

                        {{-- modal footer --}}
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                        <button type="submit" class="btn btn-primary" value="Simpan">Mulai Piket</button>
                        </div>
                    </form>
                    {{-- Form tambah Piket End --}}

            </div>
            </div>
        </div>
        {{-- End Modal --}}

        <hr>
        {{-- Start Table List Piket --}}
        <div id="list_data_piket table-responsive">
            <h2 class="page-title">Daftar Piket</h2>
            @if (!empty($list_data_piket))
                <table class="table table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Mulai Piket</th>
                            <th>Selesai Piket</th>
                            <th>Aktivitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_data_piket as $list_piket)
                            <tr>
                            <td>{{ $list_piket->id_piket}}</td>
                            <td>{{ $list_piket->nama}}</td>
                            <td>{{ $list_piket->jabatan}}</td>
                            <td>{{ $list_piket->mulai_piket}}</td>
                            <td>{{ $list_piket->selesai_piket}}</td>
                            <td>{{ $list_piket->aktivitas}}</td>
                            <td>
                                {{-- Tombol nongol pas waktu 2 jam lebih --}}
                                @if( time() >= date('H:i:s', strtotime("+2 hour", strtotime($list_piket->mulai_piket))) )
                                    <a href="{{ url('edit/' .$list_piket->id_piket. '/editData')}}"  class="btn btn-warning" type="button" value="Selesai">Selesai</a>
                                @endif
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        {{-- End Table List Piket --}}
    </div>
    {{-- End container --}}
@endsection

