@extends('layaout.master')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Vertical Form</div>
                    <hr>

                    <form action="{{ route('datakematian.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input name="nama" id="nama" type="text" class="form-control" id="input-1"
                                placeholder="Masukkan Nama">
                        </div>

                        <div class="form-group">
                            <label for="penduduk_nik">NIK Penduduk:</label>
                            <select name="penduduk_nik" class="form-control" id="penduduk_nik">
                                @foreach ($nik as $id => $nikValue)
                                    <option value="{{ $nikValue }}">{{ $nikValue }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('penduduk_nik'))
                            <div class="alert alert-danger">
                                {{ $errors->first('penduduk_nik') }}
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input name="tgl_lahir" id="tgl_lahir" type="date" class="form-control" id="input-2"
                                placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="tgl_mati">Tanggal Kematian</label>
                            <input name="tgl_mati" id="tgl_mati" type="date" class="form-control" id="input-2"
                                placeholder="Masukkan Tanggal Kematian">
                        </div>
                        <div class="form-group">
                            <label for="penyebab">Penyebab</label>
                            <input name="penyebab" id="penyebab" type="text" class="form-control" id="input-2"
                                placeholder="Masukkan Penyebab">
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
