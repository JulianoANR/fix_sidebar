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


        /* STEPS */
        .steps-form {
            display: table;
            width: 100%;
            position: relative;
        }

        .steps-form .steps-row {
            display: table-row;
        }

        .steps-form .steps-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
        }

        .steps-form .steps-row .steps-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .steps-form .steps-row .steps-step p {
            margin-top: 0.5rem;
        }

        .steps-form .steps-row .steps-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .steps-form .steps-row .steps-step .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
            margin-top: 0;
        }
    </style>
</head>

<body class="bg-auth">
    <div class="d-flex align-items-center w-100 min-vh-100 py-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">

                    <div class="wrapper-auth">

                        <div class="image-form" style="background-image: url({{ asset('images/ocean2.jpg') }});">
                            <div class="overlay-logo"></div>
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <div class="p-4 p-md-5">
                            <h5 class="text-center mb-5" style="color: #4dbbcf">Sign Up</h5>

                            <!-- Stepper -->
                            <div class="steps-form mb-4">
                                <div class="steps-row setup-panel">
                                    <div class="steps-step">
                                        <a href="#step-9" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p>Step 1</p>
                                    </div>
                                    <div class="steps-step">
                                        <a href="#step-10" type="button" class="btn btn-secondary btn-circle" disabled="disabled">2</a>
                                        <p>Step 2</p>
                                    </div>
                                    <div class="steps-step">
                                        <a href="#step-11" type="button" class="btn btn-secondary btn-circle" disabled="disabled">3</a>
                                        <p>Step 3</p>
                                    </div>
                                </div>
                            </div>

                            <form action="" method="GET">
                                <div class="form-group">
                                    <label class="pl-3" for="email">Email</label>
                                    <input class="form-control form-control-auth rounded-pill" id="email" name="" type="email" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label class="pl-3" for="password">Password <i class="ml-1 fa-solid fa-circle-exclamation"></i></label>
                                    <input class="form-control form-control-auth rounded-pill" id="password" name="" type="password" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label class="pl-3" for="confirm_password">Confirm password</label>
                                    <input class="form-control form-control-auth rounded-pill" id="confirm_password" name="" type="password" placeholder="">
                                </div>

                                <div class="form-group mb-5">
                                    <label class="pl-3" for="password">CNPJ</label>
                                    <input class="form-control form-control-auth rounded-pill" id="" name="" type="password" placeholder="">
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between mb-4">
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

    <script src="{{ asset('bootstrap-4/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap-4/js/bootstrap.min.js') }}"></script>
</body>
</html>
