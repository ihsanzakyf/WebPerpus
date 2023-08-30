@extends('layouts.main-layouts')

@section('title', 'Kategori yang terhapus')
    
@section('content')

<div class="card">
    <h5 class="card-header fw-bold"># List kategori yang terhapus</h5> 
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
                    @foreach ($deleted as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/deleted-restore/{{$item->slug}}" class="btn btn-warning btn-sm">Restore</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/category" class="btn btn-info w-25">Kembali</a>
        </div>
    </div>
  </div>
@endsection
