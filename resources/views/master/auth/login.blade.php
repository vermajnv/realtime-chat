@extends('adminlte::master')

@section('adminlte_css')
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favIcons/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favIcons/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favIcons/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favIcons/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favIcons/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favIcons/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favIcons/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favIcons/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favIcons/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favIcons/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favIcons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favIcons/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favIcons/favicon-16x16.png') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
<style type="text/css">
    @importurl("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

    .login-block {
        background: #FFE773;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #1c38ff, #2aaefb,#1ccbffbf,#78fff4b5,#96ced7d1);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #1c38ff, #2aaefb,#1ccbffbf,#78fff4b5,#96ced7d1);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        float: left;
        width: 100%;
        padding: 50px 0;
    }

    .banner-sec {
        background:url("{{ asset('logo_reno.png') }}") no-repeat center #064bfd29
        /*no-repeat left bottom*/
        ;
        /*background-size:cover;*/
        min-height: 500px;
        border-radius: 0 10px 10px 0;
        padding: 0;
    }

    .container {
        background: #fff;
        border-radius: 10px;
        box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
    }

    .carousel-inner {
        border-radius: 0 10px 10px 0;
    }

    .carousel-caption {
        text-align: left;
        left: 5%;
    }

    .login-sec {
        padding: 50px 30px;
        position: relative;
    }

    .login-sec .copy-text {
        position: absolute;
        width: 80%;
        bottom: 20px;
        font-size: 13px;
        text-align: center;
    }

    .login-sec .copy-text i {
        color: #FEB58A;
    }

    .login-sec .copy-text a {
        color: #6294e3;
    }

    .login-sec h2 {
        margin-bottom: 30px;
        font-weight: 800;
        font-size: 30px;
        color: #6292de;
    }

    .login-sec h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #6292de;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
        margin-left: auto;
        margin-right: auto
    }

    .btn-login {
        background: #6280de;
        color: #fff;
        font-weight: 600;
    }

    .banner-text {
        width: 70%;
        position: absolute;
        bottom: 40px;
        padding-left: 20px;
    }

    .banner-text h2 {
        color: #fff;
        font-weight: 600;
    }

    .banner-text h2:after {
        content: " ";
        width: 100px;
        height: 5px;
        background: #FFF;
        display: block;
        margin-top: 20px;
        border-radius: 3px;
    }

    .banner-text p {
        color: #fff;
    }

    .login-page,
    .register-page {
        background: #7395ffe6 !important;
    }
</style>
@yield('css')
@stop

@section('body_class', 'login-page')

@section('body')
<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h2 class="text-center">{{ trans('Login Now') }}</h2>
                <form action="{{ route('admin.login') }}" method="post">
                    {!! csrf_field() !!}

                    <div class="form-group has-feedback {{ $errors->has('identity') ? 'has-error' : '' }}">
                        <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input type="text" name="identity" class="form-control" value="{{ old('identity') }}" placeholder="{{ trans('Email or Username or Mobile') }}">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('identity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('identity') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="exampleInputEmail1" class="text-uppercase">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="{{ trans('adminlte::adminlte.password') }}">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input"> {{ trans('adminlte::adminlte.remember_me') }}
                        </label>
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-login float-right">{{ trans('adminlte::adminlte.sign_in') }}</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="auth-links">
                   <!--  <a href="{{ url(config('adminlte.password_reset_url', 'password/reset')) }}" class="text-center">{{ trans('adminlte::adminlte.i_forgot_my_password') }}</a> -->
                </div>
                <div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="https://github.com/vermajnv">Nayan Dev</a></div>
            </div>
            <div class="col-md-8 banner-sec">
            </div>
        </div>
    </div>
</section>
@stop

@section('adminlte_js')
<script src="{{ asset('vendor/adminlte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
@yield('js')
@stop
