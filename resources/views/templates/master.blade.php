<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{url('/favicon.ico')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{-- Link Font Google --}}
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <title>@yield('title')</title>

    @yield('style')


    <style>
        #keranjang {
            border-radius: 50% 5px 50% 50%;
            position: fixed;
            bottom: 3rem;
            right: 3rem;
            width: 4rem;
            height: 4rem;
            line-height: 4.3rem;
            text-align: center;
            background: #f9423a;
        }

        #keranjang_jumlah {
            position: absolute;
            background: salmon;
            border-radius: 50%;
            bottom: 0;
            left: -0.5rem;
            width: 2rem;
            height: 2rem;
            line-height: 2rem;
            color: white;
        }

        .dropdown-item {
            height: 3rem;
            line-height: 3rem;
        }

        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }

    </style>
</head>

<body>

    @if( Route::is('login','register'))
    <div class="container">

        @yield('content')

    </div>



    <footer class="fixed-bottom">
        <div class="container text-center pb-1">
            Made Whit Love for Indonesia
        </div>
    </footer>
    @else
    <div class="container">
        @include('components.navbar')

        @yield('content')

    </div>

    <footer class="container">
        @include('components.footer')
    </footer>
    @endif

    @yield('script')
</body>

</html>
