@extends('layouts.main-layouts')

@section('title', 'Halaman User')
    
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
<div class="card col-6">
    <h5 class="card-header fw-bold"># Detail User List 
        @if ($user->status == 'inactive')  
            <a href="/user-approve/{{$user->slug}}" class="btn btn-info float-end" style="margin-right: 10rem"> Approve User</a>
        @endif
    </h5> 
    <div class="card-body col-6">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    <div class="card-body col-6">
        <label for="" class="form-label">Phone</label>
        <input type="text" class="form-control" readonly value="{{$user->phone}}">
    </div>
    <div class="card-body col-6">
        <label for="" class="form-label">Adress</label>
        <textarea name="" id="" cols="30" rows="1" class="form-control">{{ $user->address }}</textarea>
    </div>
    <div class="card-body col-6">
        <label for="" class="form-label">Status</label>
        <input type="text" class="form-control" readonly value="{{ $user->status }}"></input>
    </div>

    <div class="mt-5 container">
        <h2>Log Penyewaan</h2>
        <x-rent-log-table :rentlog='$rentlog'/>
    </div>
</div>
@endsection
