<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('head')
    <title>Amplitude | @yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/icon-logo.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Fonte --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    {{-- Awesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    {{-- CSS Bootstrap 4.6.0 --}}
    <link rel="stylesheet" href="{{ asset('bootstrap-4/css/style.css') }}">

    <style>
        /* *** CSS necessário para página atual *** */
        .background-image {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .wrapper-form {
            width: 100%;
            background: rgb(0 0 0 / 0.50);
            border-radius: .5rem;
            box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
        }

        .form-control-auth {
            display: block;
            width: 100%;
            height: calc(2rem + 10px);
            padding: 0.5rem 1rem;
            outline: none;
            border: 2px solid transparent;
            font-weight: 400;
            line-height: 1.5;
            font-size: 0.85rem;
            color: white;
            background: rgb(0 0 0 / 0.30);
        }

        .form-control-auth:focus {
            border: 2px solid #4dbbcf;
            background: transparent;
        }

        .checkbox-wrap {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .checkbox-wrap input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
        }

        .checkmark:after {
            content: "\f0c8";
            font-family: "FontAwesome";
            position: absolute;
            color: #f8f9fd;
            font-size: 20px;
            margin-top: -4px;
            -webkit-transition: 0.15s;
            -o-transition: 0.15s;
            transition: 0.15s;
        }

        @media (prefers-reduced-motion: reduce) {
            .checkmark:after {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        .checkbox-wrap input:checked ~ .checkmark:after {
            display: block;
            content: "\f14a";
            font-family: "FontAwesome";
            color: rgba(0, 0, 0, 0.2);
        }

        .checkbox-primary {
            color: #4dbbcf;
        }

        .checkbox-primary input:checked ~ .checkmark:after {
            color: #4dbbcf;
        }

        .input-invalid {
            border: 2px solid #fe7e8b !important;
            background: transparent;
        }

        .text-error {
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #fe7e8b;
        }
    </style>

    @yield('extra-styles')
</head>
<body class="background-image" style="background-image: url({{ asset('images/ocean2.jpg') }});">

    @yield('content')

    <script src="{{ asset('bootstrap-4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
    @yield('extra-plugins')
</body>
</html>
