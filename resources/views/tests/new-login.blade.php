<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Amplitude | Login</title>
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
        .bg-auth {
            background: #f8f9fd !important;
        }

        .wrapper-auth {
            width: 100%;
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
        }

        .image-form {
            width: 100%;
            height: 200px;
            border-radius: .5rem .5rem 0 0;

            position: relative;

            display: flex;
            justify-content: center;
            align-items: center;

            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .overlay-logo {
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;

            opacity: 0.15;
            background: #3f3f46;
            border-radius: .5rem .5rem 0 0;
        }

        .form-control-auth {
            height: calc(2rem + 10px) !important;
            padding: 0.5rem 1rem !important;
            font-size: 0.85rem !important;
            line-height: 1.5 !important;
        }

        .checkbox-wrap {
            display: block;
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 400;
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
            color: rgba(0, 0, 0, 0.1);
            font-size: 20px;
            margin-top: -4px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
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
    </style>
</head>

<body class="bg-auth">
    <div class="d-flex align-items-center w-100 min-vh-100 py-2">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 col-xl-5">

                    <div class="wrapper-auth">
                        <div class="image-form" style="background-image: url({{ asset('images/ocean2.jpg') }});">
                            <div class="overlay-logo"></div>
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <div class="p-4 p-md-5">
                            <h5 class="text-center mb-4" style="color: #4dbbcf">{{ __('Sign In') }}</h5>

                            @if ($errors->any())
                                <!-- List errors -->
                                <div class="mb-4" id="errors-list">
                                    <h5 class="d-flex justify-content-center align-items-center text-danger">
                                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                    </h5>

                                    @foreach ($errors->all() as $error)
                                        <p class="ml-3 text-danger text-center">{!! $error !!}</p>
                                    @endforeach
                                </div>
                            @endif


                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="pl-3" for="email">{{ __('Email') }} <i class="ml-1 fa-solid fa-envelope"></i></label>
                                    <input class="form-control form-control-auth rounded-pill {{ $errors->has('email') ? 'is-invalid' : '' }}" autofocus id="email" name="email" type="email" required autocomplete="email">
                                </div>

                                <div class="form-group mb-5">
                                    <label class="pl-3" for="password">{{ __('Password') }} <i class="ml-1 fa-solid fa-lock"></i></label>
                                    <input class="form-control form-control-auth rounded-pill {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" type="password" required autocomplete="current-password">
                                </div>

                                <div class="form-group mb-4">
                                    <button class="btn btn-primary rounded-pill py-2 w-100" type="submit">{{ __('Login') }}</button>
                                </div>

                                <div class="form-group d-flex">
                                    <div class="w-50">
                                        <label class="checkbox-wrap checkbox-primary mb-0">
                                            {{ __('Remember Me') }} <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="w-50 text-right">
                                        @if (Route::has('password.request'))
                                            <a class="text-secondary" href="{{ route('password.request') }}">{{ __('Forgot Password?') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <span>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Amplitude | All rights reserved
                </span>
            </div>
        </div>

    </div>

    <script src="{{ asset('bootstrap-4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
</body>
</html>
