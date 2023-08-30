@extends('layouts.main-layouts')

@section('title', 'Edit Kategori')
    
@section('content')
<h2># Edit Kategori</h2>

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
    <form action="/category-edit/{{$category->slug}}" method="post">
        @csrf
        @method('PUT')
        <div class="">
            <label for="name" class="form-label">Nama Kategori</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}" placeholder="Nama Kategori Buku">
        </div>
        <div class="mt-2">
            <button class="btn btn-success btn-sm" type="submit"> Update</button>
        </div>
    </form>
</div>
@endsection
