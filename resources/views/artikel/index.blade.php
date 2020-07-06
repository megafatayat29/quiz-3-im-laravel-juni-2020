@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div>
        <div class="card">
            <h1 class="ml-3">Tabel Artikel</h1>
            <div class="card-header">
                <a href="/artikel/create" class="btn btn-primary mb-2">
                    Create New Artikel
                </a>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Dibuat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->isi }}</td>
                            <td>{{ $item->tgl_dibuat }}</td>
                            <td>
                                <a href="/artikel/{{$item->artikel_id}}" class="btn btn-sm btn-info">Show</a>
                                <a href="/artikel/{{$item->artikel_id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/artikel/{{$item->artikel_id}}" method="POST" style="display: inline">
                                  @csrf
                                  @method('DELETE')
                                  <button class="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
    
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush