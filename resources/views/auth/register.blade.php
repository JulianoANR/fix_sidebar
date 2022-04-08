@extends('layouts.app-auth')
@section('titulo', 'Register')

@section('extra-styles')
    <style>
        /* *** CSS STEPS *** */
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
@endsection

@section('content')
    <div class="d-flex align-items-center w-100 min-vh-100 py-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 col-xl-5">

                    <div class="wrapper-form">
                        <!-- Wrapper LOGO -->
                        <div class="d-flex justify-content-center align-items-center" style="height: 180px;">
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <div class="px-4 pb-4 pb-md-4 px-md-5">
                            <h5 class="text-center mb-5" style="color: #fff">Sign Up</h5>

                            <!-- Step progress -->
                            <div class="steps-form mb-4">
                                <div class="steps-row setup-panel">
                                    <div class="steps-step">
                                        <a href="#step-9" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p class="text-white">Step 1</p>
                                    </div>
                                    <div class="steps-step">
                                        <a href="#step-10" type="button" class="btn btn-secondary btn-circle" disabled="disabled">2</a>
                                        <p class="text-white">Step 2</p>
                                    </div>
                                </div>
                            </div>

                            

                        </div>

                    </div>

                </div>
            </div>

            <div class="row justify-content-center mt-3 text-white">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Amplitude | All rights reserved
            </div>

        </div>
    <div>
@endsection
