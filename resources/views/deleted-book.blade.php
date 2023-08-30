@extends('layouts.main-layouts')

@section('title', 'Buku yang terhapus')
    
@section('content')

<div class="card">
    <h5 class="card-header fw-bold"># List kategori buku yang terhapus</h5> 
    <div class="card-body">
        <div class="">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($delBook as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->book_code }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <a href="/deleted-restore/{{$item->slug}}" class="btn btn-warning btn-sm">Restore</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/books" class="btn btn-info w-25">Kembali</a>
        </div>
    </div>
  </div>
@endsection
