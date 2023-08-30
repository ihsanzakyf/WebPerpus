<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <title>@yield('title') | Al - Rohmah</title>
</head>
<body>
  <div class="main d-flex flex-column justify-content-between">
   <nav class="navbar navbar-info navbar-expand-lg bg-info">
    <img  src="{{ asset('images/mts.png') }}" width="30" height="30" alt="" srcset="" class="ms-4">
    <div class="container-fluid">
      <a href="#" class="navbar-brand text-white">
        MTS Al - Rohmah
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
   </nav>
   <div class="body-content h-100">
    <div class="row g-0 h-100">
      <div class="sidebar col-12 col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
        @if (Auth::user())
          @if (Auth::user()->role_id == 1)
            <a href="/dashboard" 
            @if (request()->route()->uri == 'dashboard') class='active'
            @endif>Dashboard</a>
            <a href="/books" 
            @if (request()->route()->uri == 'books' || request()->route()->uri == 'books-add' || request()->route()->uri == 'books-edit/{slug}') class='active'
            @endif>Buku</a>
            <a href="/category" 
            @if (request()->route()->uri == 'category' || request()->route()->uri == 'category-add' || request()->route()->uri == 'deleted-list' || request()->route()->uri == 'category-delete/{slug}' || request()->route()->uri == 'category-edit/{slug}') class='active'
            @endif>Kategori</a>
            <a href="/user"  
            @if (request()->route()->uri == 'user' || request()->route()->uri == 'registered-user' || request()->route()->uri == 'user-detail/{slug}' || request()->route()->uri == 'user-ban/{slug}' || request()->route()->uri == 'user-banned') class='active'
            @endif>User</a>
            <a href="/rentlog"  
            @if (request()->route()->uri == 'rentlog') class='active'
            @endif>Log Penyewaan</a>
            <a href="/"  
            @if (request()->route()->uri == '/' ) class='active'
            @endif>List Buku</a>
            <a href="/books-rent"  
            @if (request()->route()->uri == 'books-rent' ) class='active'
            @endif>Pinjam Buku</a>
            <a href="/books-return"  
            @if (request()->route()->uri == 'books-return' ) class='active'
            @endif>Pengembalian Buku</a>
            <a href="/logout">Log Out</a>
          @else
            <a href="/profile" 
            @if (request()->route()->uri == 'profile') class='active'
            @endif>Profile</a>
            <a href="/"  
            @if (request()->route()->uri == '/' ) class='active'
            @endif>Book List</a>
            <a href="/logout">Logout</a>
          @endif
          @else
          <a href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        @endif
      </div>
      <div class="content p-5 col-12 col-lg-10">
        @yield('content')
      </div>
    </div>
  </div>  
</div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>