@extends('layouts.main-layouts')

@section('title', 'List Buku')
    
@section('content')

<form action="" method="GET">
    <div class="row mb-5">
        <div class="col-12 col-sm-6">
            <select name="category" id="category" class="form-select">
                <option value="">--Silahkan Pilih--</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-sm-6">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Cari judul buku..." >
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i> Cari</button>
              </div>
        </div>
    </div>
</form>

  <div class="my-2">
    <div class="row">
        @foreach ($books as $item)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
            <div class="card h-100">
                <img src="{{ $item->cover != null ? asset('storage/cover/' . $item->cover) : asset('images/nocover.png')}}" height="300px"  class="card-img-top" draggable="false" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->book_code }}</h5>
                  <p class="card-text">{{ $item->title }}</p>
                  <p class="card-text float-end badge{{ ($item->status == 'in stock') ? 'badge text-bg-success' : 'badge text-bg-danger'}}">
                    {{ $item->status }}
                </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
@endsection
