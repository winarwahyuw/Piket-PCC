
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

        <!-- Modal -->
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
                    <form>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select id="jabatan" class="form-control">
                                @foreach ($jabatan as $jabatan)
                                <option value="{{$jabatan->kode_jabatan}}">{{ $jabatan-> nama_jabatan}}</option>
                                @endforeach
                            </select>
                        </div>

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
                    </form>
                    {{-- Form tambah Piket End --}}
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                <button type="submit" class="btn btn-primary">Mulai Piket</button>
                </div>
            </div>
            </div>
        </div>
    </div>


@endsection

