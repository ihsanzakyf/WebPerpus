@extends('layouts.main-layouts')

@section('title', 'Delete Kategori')

@section('content')

<div class="container mt-5">
    <div class="card px-0">
        <h5 class="card-header">Halaman Delete Buku</h5>
        
        <div class="card-body">
            <h5>Apakah yakin Buku, {{$books->title}} akan dihapus ?</h5>
            <form style="display: inline-block" action="/books-destroy/{{$books->title}}" method="POST" id="delete-form">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="/books" class="btn btn-primary">Cancel</a>
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
                text: "Kategori {{$books->slug}} akan dihapus!",
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
    
