<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Login | Perpustakaan Al-Rohmah</title>
</head>
<body class="text-center">
    <div class="bg">
        @if (session('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                @elseif ($okin = Session::get('okin'))
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: '{{ $okin }}',
                            showConfirmButton: false,
                            allowOutsideClick: true, 
                            allowEscapeKey: true,
                            showCloseButton: true,
                        });
                    });
                </script>
                @endif
        <form class="form-signin" method="POST" action="" data-aos="fade-up">
            @csrf
            <img class="mb-4" src="{{ asset('images/mts.png') }}" style="margin-top: 10rem;" alt="foto" width="250" height="">
            <h1 class="h3 mb-3 font-weight-bold text-white">LOGIN</h1>

            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus="">

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button><br>
            <a href="/register" class="btn btn-warning btn-sm mt-1">Belum Punya Akun ? <u>Register</u></a><br>
            <?php
                $currentYear = date('Y');
                echo "<span class='text-white font-weight-bold' data-aos='fade-up'>&copy; $currentYear Supported By <br> Ihsan Zaky Fadillah</span>";
            ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
