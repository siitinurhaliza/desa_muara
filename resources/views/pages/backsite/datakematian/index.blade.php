@extends('layaout.master')

@section('content')


        <div class="row mt-3">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Table</h5>
                <div class="table-responsive">
                  <a href="{{ route('datakematian.create') }}" class="btn btn-primary btn-sm mb-3" style="padding: 12px">Tambah Data</a>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Tanggal Kematian</th>
                        <th scope="col">Penyebab</th>
                        <th scope="col">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($datakematian as $item)
                   <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nama }}</td>
                    <td> {{ $item->penduduk->NIK }}</td>
                    <td> {{ $item->tgl_lahir }}</td>
                    <td> {{ $item->tgl_mati }}</td>
                    <td> {{ $item->penyebab }}</td>
                    <td>
                      <div>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('datakematian.edit', $item->id) }}" class="btn btn-warning mr-3">Edit</a>
                              <form id="deleteForm{{ $item->id }}" action="{{ route('datakematian.destroy', $item->id) }}" method="POST" style="display: inline;">
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
