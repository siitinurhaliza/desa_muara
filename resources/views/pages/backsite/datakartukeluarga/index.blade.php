@extends('layaout.master')

@section('content')


        <div class="row mt-3">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Table</h5>
                <div class="table-responsive">
                  <a href="{{ route('datakartukeluarga.create') }}" class="btn btn-primary btn-sm mb-3" style="padding: 12px">Tambah Data</a>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Jenis Pekerjaan</th>
                        <th scope="col">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($datakartukeluarga as $item)
                   <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nama }}</td>
                    <td> {{ $item->nik }}</td>
                    <td> {{ $item->jenis_kelamin }}</td>
                    <td> {{ $item->tempat_lahir }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tgl_lahir)->format('d-m-Y')}}</td>
                    <td> {{ $item->agama }}</td>
                    <td> {{ $item->pendidikan }}</td>
                    <td> {{ $item->jenis_pekerjaan }}</td>
                    <td>
                      <div>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('datakartukeluarga.edit', $item->id) }}" class="btn btn-warning mr-3">Edit</a>
                              <form id="deleteForm{{ $item->id }}" action="{{ route('datakartukeluarga.destroy', $item->id) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger px-5" onclick="confirmDelete('{{ $item->id }}')">Delete</button>
                              </form>
                            </div>
                      </div>
                    </td>
                   </tr>

                   @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!--End Row-->
@endsection
