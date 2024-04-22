@extends('layaout.master')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create Form</div>
                    <hr>

                    <form action="{{ route('datakartukeluarga.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="input-1">Nama</label>
                            <input name="nama" id="nama" type="text" class="form-control" id="input-1"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="input-2">NIK</label>
                            <input name="nik" id="nik" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan Nama Ayah Kandung">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Jenis Kelamin</label>
                            <input name="jenis_kelamin" id="jenis_kelamin" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan Nama Ibu Kandung">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Tempat Lahir</label>
                            <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Tanggal Lahir</label>
                            <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control" id="input-2"
                                placeholder="Masukkan Waktu Kelahiran">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Agama</label>
                            <input name="agama" id="agama" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan agama">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Pendidikan</label>
                            <input name="pendidikan" id="pendidikan" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan pendidikan">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Jenis Pekerjaan</label>
                            <input name="jenis_pekerjaan" id="jenis_pekerjaan" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan jenis pekerjaan">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-light px-5">Submit</button>
                            <a href="{{ route('datakartukeluarga.index') }}" class="btn btn-light px-5">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div><!--End Row-->
@endsection
