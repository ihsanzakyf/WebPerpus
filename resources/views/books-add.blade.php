@extends('layouts.main-layouts')

@section('title', 'Tambahkan Buku')
    
@section('content')

<h2>Tambahkan Buku Baru</h2>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
    <form action="/books-add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label for="kode_buku" class="form-label">Kode Buku</label>
            <input type="text" name="book_code" id="book_code" class="form-control" placeholder="Kode Buku" value="{{ old('book_code') }}">
        </div> 

        <div class="mb-2">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Judul Buku" value="{{ old('title') }}">
        </div>

        <div class="mb-2">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control" placeholder="Nama Kategori Buku" value="{{ old('cover') }}">
        </div>

        <div class="mb-2">
            <label for="category" name="categories" class="form-label">Category</label>
            <select name="categories[]" id="category"  class="form-select" multiple aria-label="multiple select example">
                @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>            
        <div class="mt-4">
            <button class="btn btn-success btn-sm" type="submit"> Save</button>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#category').select2();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


@endsection
