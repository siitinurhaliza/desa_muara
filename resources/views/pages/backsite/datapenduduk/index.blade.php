@extends('layaout.master')

@section('content')


        <div class="row mt-3">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Table</h5>
                <div class="table-responsive">
                  <a href="{{ route('datapenduduk.create') }}" class="btn btn-primary btn-sm mb-3" style="padding: 12px">Tambah Data</a>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($datapenduduk as $item)
                   <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nama }}</td>
                    <td> {{ $item->NIK }}</td>
                    <td> {{ $item->Tanggal_Lahir }}</td>
                    <td> {{ $item->Alamat }}</td>
                    <td> {{ $item->No_Hp }}</td>
                    <td> 
                      <div>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('datapenduduk.edit', $item->id) }}" class="btn btn-warning mr-3">Edit</a>     
                              <form id="deleteForm{{ $item->id }}" action="{{ route('datapenduduk.destroy', $item->id) }}" method="POST" style="display: inline;">
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