    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>Solicitor's Hub</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/bootstrap.min.css')}}"/>
    <!-- Google Fonts API -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
    <link href="https://fonts.googleapis.com/css?family=Akronim&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Custom CSS -->
    @php
        // dd(asset('front/css/style.css'))
    @endphp
    <link rel="stylesheet" href="{{asset('css/front/style.css')}}">
    <!--JS-->
    <script type="text/javascript" src="{{ asset('js/front/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/front/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/front/bootstrap.min.js')}}"></script>
    <!-- End JS-->
</head>

<body id="page-top">
    @include('front.includes.nav')
    @include('front.includes.header')
    @yield('content')
    @include('front.includes.footer')
    @stack('scripts')
</body>
