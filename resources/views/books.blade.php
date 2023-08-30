@extends('layouts.main-layouts')

@section('title', 'Katalog Buku')
    
@section('content')
@if ($status = Session::get('status'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $status }}',
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
@endif
  <div class="card">
    <h5 class="card-header fw-bold"># List Buku 
        <a href="books-add" class="btn btn-primary float-end" style="margin-right: 10rem"><i class="bi bi-plus-lg"></i> Tambahkan Buku</a>
        {{-- <a href="deleted-book" class="btn btn-secondary float-end" style="margin-right: 5px"><i class="bi bi-eye"></i> Lihat Buku yang terhapus</a>  --}}
      </h5> 
    <div class="card-body">
        <div class="">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->book_code }}</td>
                          <td>{{ $item->book_code }}</td>
                          <td>{{ $item->title }}</td>
                          
                          @foreach ($item->categories as $ctg)
                                <td> 
                                    {{ $ctg->name }}<br>
                                </td>
                          @endforeach
                          
                          <td>{{ $item->status }}</td>
                          <td>
                            <a href="/books-edit/{{ $item->slug }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/books-delete/{{ $item->slug }}" class="btn btn-danger btn-sm">Hapus</a>
                          </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
