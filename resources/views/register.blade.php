<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"> --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <!-- Title -->
    <title>Register | Perpustakaan Al-Rohmah</title>
</head>

<body class="text-center">
    <div class="bg">
    <form class="form-signin" method="POST" action="" data-aos="fade-up">
        @csrf
        <img class="mb-4" src="{{ asset('images/mts.png') }}" style="margin-top: 10rem;" alt="" width="150" height="">

        <h1 class="h3 mb-3 font-weight-bold text-white">Please sign in</h1>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show text-justify" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
        @endif
        <input type="text" name="username" id="username" class="form-control" placeholder="Username"  autofocus>
        <input type="number" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon">
        <textarea name="address" id="address" class="form-control" placeholder="Alamat" cols="10" rows="1" ></textarea>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" >

        <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 1rem">Sign in</button>
        <a href="/login" class="btn btn-warning btn-sm mt-1">Sudah punya akun ? <u>Login ?</u></a><br>
        <?php
             $currentYear = date('Y');
             echo "<span class='text-white font-weight-bold'>&copy; $currentYear Supported By <br> Ihsan Zaky Fadillah</span>";
        ?>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>