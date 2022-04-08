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
        /* *** CSS necessário para página atual *** */
        .background-image {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .background-auth {
            background: #f8f9fd;

            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center
        }

        .overlay {
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;

            opacity: 0.25;
            background: #3f3f46;
        }

        .wrapper-form {
            width: 100%;
            background: #fff;
            border-radius: .5rem;
            box-shadow: 0px 10px 34px -15px rgb(0 0 0 / 24%);
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
<body>
    <!-- *** HTML *** -->
    <div class="d-flex justify-content-center">

        <div class="background-image d-none d-lg-flex col-lg-6 min-vh-100 justify-content-center align-items-center" style="background-image: url({{ asset('images/ocean2.jpg') }});">
            <div class="overlay"></div>

            {{-- <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="125px"> --}}

            <span class="position-relative text-center text-white px-5" style="z-index: 10; font-size: 16px">
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s"
            </span>
        </div>

        <div class="background-auth col-12 col-lg-6 min-vh-100 py-4">
            <div class="w-100">

                <div class="row justify-content-center m-0">

                    <div class="col-12 col-md-8 col-lg-12 col-xl-8 px-0">
                        <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <div class="px-2 pb-2 px-md-5 pb-md-4">
                            <h4 class="text-center mb-4" style="color: #4dbbcf">Sign In</h4>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="pl-3" for="email">Email <i class="ml-1 fa-solid fa-envelope"></i></label>
                                    <input class="form-control form-control-auth rounded-pill @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" name="email" type="email" spellcheck="false">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="pl-3" for="password">Password <i class="ml-1 fa-solid fa-lock"></i></label>
                                    <input class="form-control form-control-auth rounded-pill @error('password') is-invalid @enderror" id="password" name="password" type="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <button class="btn btn-primary rounded-pill py-2 w-100" type="submit">Login</button>
                                </div>

                                <div class="form-group d-flex">
                                    <div class="w-50">
                                        <label class="checkbox-wrap checkbox-primary mb-0">
                                            Remember Me <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="w-50 text-right">
                                        <a class="text-secondary" href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center m-0 mt-2">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Amplitude | All rights reserved
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap-4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
</body>
</html>
