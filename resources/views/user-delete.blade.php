@extends('layouts.main-layouts')

@section('title', 'Delete User')

@section('content')

<div class="container mt-5">
    <div class="card px-0">
        <h5 class="card-header">Halaman Delete Kategori</h5>
        
        <div class="card-body">
            <h5>Apakah yakin User, {{$user->username}} akan dihapus ?</h5>
            <form style="display: inline-block" action="/user-destroy/{{$user->slug}}" method="POST" id="delete-form">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/user" class="btn btn-primary">Cancel</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Mencegah pengiriman form secara langsung
        document.getElementById('delete-form').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "User {{$user->slug}} akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengklik "Ya, hapus!", submit form secara manual
                    event.target.submit();
                }
            });
        });
    </script>
@endsection
    
