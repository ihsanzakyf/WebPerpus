@extends('layouts.main-layouts')

@section('title', 'Kategori Buku')

@section('page-name', 'Kategori Buku')
    
@section('content')
@if ($tambah = Session::get('tambah'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $tambah }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@elseif ($update = Session::get('update'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $update }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@elseif ($hapus = Session::get('hapus'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $hapus }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@elseif ($delete = Session::get('delete'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $delete }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@elseif ($restore = Session::get('restore'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $restore }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@elseif ($error = Session::get('error'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ $error }}',
            showConfirmButton: false,
            allowOutsideClick: true, 
            allowEscapeKey: true,
            showCloseButton: true,
        });
    });
</script>
@endif
<div class="card">
    <h5 class="card-header fw-bold"># List Kategori Buku 
        <a href="category-add" class="btn btn-primary float-end" style="margin-right: 10rem"><i class="bi bi-plus-lg"></i> Tambahkan</a>
        <a href="deleted-list" class="btn btn-secondary float-end" style="margin-right: 5px"><i class="bi bi-eye"></i> Lihat data yang terhapus</a> </h5> 
    <div class="card-body">
        <div class="">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/category-edit/{{$item->slug}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/category-delete/{{$item->slug}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
