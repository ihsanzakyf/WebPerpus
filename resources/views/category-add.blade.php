@extends('layouts.main-layouts')

@section('title', 'Add Kategori')
    
@section('content')
<h2>Tambahkan Kategori Baru</h2>

<div class="mt-5 w-25">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/category-add" method="post">
        @csrf
        <div class="">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nama Kategori Buku" autofocus>
        </div>
        <div class="mt-2">
            <button class="btn btn-success btn-sm" type="submit"> Save</button>
        </div>
    </form>
</div>
@endsection
