@extends('layouts.main-layouts')

@section('title', 'Log Pemnijaman')
    
@section('content')
<div class="card">
  <h5 class="card-header fw-bold"># List Kategori Buku 
      {{-- <a href="category-add" class="btn btn-primary float-end" style="margin-right: 10rem"><i class="bi bi-plus-lg"></i> Tambahkan</a>
      <a href="deleted-list" class="btn btn-secondary float-end" style="margin-right: 5px"><i class="bi bi-eye"></i> Lihat data yang terhapus</a>  --}}
    </h5> 
  <div class="card-body">
      <div class="">
          <x-rent-log-table :rentlog='$rentlog' />
      </div>
  </div>
</div>
@endsection
