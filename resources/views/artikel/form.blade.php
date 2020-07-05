@extends('layouts.master')

@section('content')
<div class="ml-3 mt-3">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Tambah Artikel</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="/artikel" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel">
                </div>
                <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <input type="textbox" class="form-control" id="isi" name="isi" placeholder="Masukkan Isi Artikel">
                </div>
                <div class="form-group">
                    <label for="isi">Tag</label>
                    <input type="textbox" class="form-control" id="tag" name="tag" placeholder="Masukkan Tag">
                </div>
            </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
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