<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Solicitor's Hub</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <!-- Google Fonts API -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
    <link href="https://fonts.googleapis.com/css?family=Akronim&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    @php
        // dd(asset('front/css/style.css'))
    @endphp
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
</head>

<body id="page-top">
    @include('front.includes.nav')
    @include('front.includes.header')
    @yield('content')
    @include('front.includes.footer')
    @stack('scripts')
</body>
