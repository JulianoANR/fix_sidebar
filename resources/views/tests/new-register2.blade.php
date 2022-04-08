<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Amplitude | Register</title>
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

<body class="bg-auth">
    <div class="d-flex align-items-center w-100 min-vh-100 py-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 col-xl-8">

                    <div class="wrapper-auth">
                        <div class="image-form" style="background-image: url({{ asset('images/ocean2.jpg') }});">
                            <div class="overlay-logo"></div>
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <div class="p-4 p-md-5">
                            <h5 class="text-center mb-4" style="color: #4dbbcf">Sign Up</h5>

                            <form action="" method="GET">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="pl-3" for="email">Email</label>
                                        <input class="form-control form-control-auth rounded-pill" id="email" name="" type="email" placeholder="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <label class="pl-3" for="password">Password <i class="ml-1 fa-solid fa-circle-exclamation"></i></label>
                                        <input class="form-control form-control-auth rounded-pill" id="password" name="" type="password" placeholder="">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label class="pl-3" for="confirm_password">Confirm password</label>
                                        <input class="form-control form-control-auth rounded-pill" id="confirm_password" name="" type="password" placeholder="">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label class="pl-3" for="password">CNPJ</label>
                                        <input class="form-control form-control-auth rounded-pill" id="" name="" type="password" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between my-4">
                                    <a class="text-secondary" href="#">Have an account?</a>
                                    <button class="btn btn-primary rounded-pill py-2 px-4" type="submit">Register</button>
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

    {{-- <div class="form-row">
        <div class="form-group col-lg-6">
            <label class="pl-3" for="email">Email</label>
            <input class="form-control form-control-auth rounded-pill" id="email" name="" type="email" placeholder="">
        </div>

        <div class="form-group col-lg-6">
            <label class="pl-3" for="password">Password <i class="ml-1 fa-solid fa-circle-exclamation"></i></label>
            <input class="form-control form-control-auth rounded-pill" id="password" name="" type="password" placeholder="">
        </div>
    </div> --}}

    <script src="{{ asset('bootstrap-4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
</body>
</html>
