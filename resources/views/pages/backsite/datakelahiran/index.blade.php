@extends('layaout.master')

@section('content')


        <div class="row mt-3">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Table</h5>
                <div class="table-responsive">
                  <a href="{{ route('datakelahiran.create') }}" class="btn btn-primary btn-sm mb-3" style="padding: 12px">Tambah Data</a>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nama Ayah</th>
                        <th scope="col">Nama Ibu</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Waktu Kelahiran</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Aksi</th>

                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($datakelahiran as $item)
                   <tr>
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nama }}</td>
                    <td> {{ $item->nama_ayah }}</td>
                    <td> {{ $item->nama_ibu }}</td>
                    <td> {{ $item->waktu_kelahiran }}</td>
                    <td> {{ $item->Tanggal_Lahir }}</td>
                    <td> {{ $item->No_Hp }}</td>
                    <td> 
                      <div>
                        <div class="d-flex align-items-center justify-content-center">
                          <a href="{{ route('datakelahiran.edit', $item->id) }}" class="btn btn-warning mr-3">Edit</a>     
                              <form id="deleteForm{{ $item->id }}" action="{{ route('datakelahiran.destroy', $item->id) }}" method="POST" style="display: inline;">
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