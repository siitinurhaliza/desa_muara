@extends('layaout.master')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Vertical Form</div>
                <hr>

                <form action="{{ route('datakematian.update', $datakematian->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input name="nama" id="nama" type="text" class="form-control" id="input-1"
                                placeholder="Masukkan Nama" value="{{ old('nama', $datakematian ->nama) }}">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Nik</label>
                            <input name="nik" id="nik" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan nik" value="{{ old('nik', $datakematian ->nik) }}">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Tanggal Lahir</label>
                            <input name="tgl_lahir" id="tgl_lahir" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan tgl_lahir" value="{{ old('tgl_lahir', $datakematian ->tgl_lahir) }}">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Tanggal Kematian</label>
                            <input name="tgl_mati" id="tgl_mati" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan tgl_mati" value="{{ old('tgl_mati', $datakematian ->tgl_mati) }}">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Penyebab</label>
                            <input name="penyebab" id="penyebab" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan penyebab" value="{{ old('penyebab', $datakematian ->penyebab) }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5">Submit</button>
                            <a href="{{ route('datakematian.index') }}" class="btn btn-light px-5">Cancel</a>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div><!--End Row-->
@endsection