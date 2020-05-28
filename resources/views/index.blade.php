
{{-- <form class="form-group">
    @foreach ($jabatan as $x)
        {{ $x-> keterangan}}
        {{ $x-> nama_jabatan}}
    @endforeach
</form> --}}


@extends('master')

@section('content')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-piket">
            Tambah piket
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
                                <option value="{{$jabatan->kode_jabatan}}">{{ $jabatan-> nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- NIM --}}
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input class="form-control" type="text" id="nim" placeholder="nim">
                        </div>

                        {{-- nama --}}
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <select id="nama" class="form-control">
                                @foreach ($nama as $x)
                                    <option>{{ $x-> nama }}
                                    </option>
                                @endforeach

                                {{-- COBA --}}
                                <script>
                                    $(document).ready(function(){
                                        $('#jabatan').change(function(){
                                            $('#nama').children('option').hide();
                                            $('#nama').children("option[value^=]" + $(this).val().split("")[0]+ "]").show();
                                        })
                                    })
                                </script>
                            </select>
                        </div>

                        {{-- mulai piket --}}
                        <div class="form-group">
                            <label for="mulai_piket">Mulai Piket</label>
                        <input class="form-control" type="datetime-local" name="mulai_piket" id="mulai_piket" value="{{ date("Y-m-d h:i:sa")}}">
                        </div>

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
        <div id="list_data_piket">
            <h2>Daftar Piket</h2>
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
                            <td>{{ $list_piket->nim}}</td>
                            <td>Jabatan</td>
                            <td>{{ $list_piket->mulai_piket}}</td>
                            <td>{{ $list_piket->selesai_piket}}</td>
                            <td>{{ $list_piket->aktivitas}}</td>
                            <td>
                                <button class="btn btn-warning" type="submit" value="Selesai">Selesai</button>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        {{-- End Table List Piket --}}
    </div>


@endsection

