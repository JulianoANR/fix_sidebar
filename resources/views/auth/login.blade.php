@extends('layouts.app-auth')
@section('titulo', 'Login')

@section('content')
    <!-- *** HTML *** -->
    <div class="d-flex align-items-center w-100 min-vh-100 py-4">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 col-xl-5">

                    <div class="wrapper-form">
                        <!-- Wrapper LOGO -->
                        <div class="d-flex justify-content-center align-items-center" style="height: 180px;">
                            <img class="position-relative" src="{{ asset('images/icon-logo.png') }}" style="z-index: 10;" alt="Logo Amplitude" width="65px">
                        </div>

                        <!-- Wrapper INPUTS -->
                        <div class="px-4 pb-4 pb-md-4 px-md-5">
                            <h5 class="text-center mb-4" style="color: #fff">Sign In</h5>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label class="pl-3 text-white" for="email">Email <i class="ml-1 fa-solid fa-envelope"></i></label>
                                    <input class="form-control-auth rounded-pill @error('email') input-invalid @enderror" id="email" name="email" value="{{ old('email') }}" type="email" required   spellcheck="false">

                                    @error('email')
                                        <span class="text-error ml-3" role="alert">
                                                <strong>These credentials do not match our records.</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="pl-3 text-white" for="password">Password <i class="ml-1 fa-solid fa-lock"></i></label>
                                    <input class="form-control-auth rounded-pill @error('password') input-invalid @enderror" id="password" name="password" type="password" required>

                                    @error('password')
                                        <span class="text-error ml-3" role="alert">
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
                                        @if (Route::has('password.request'))
                                            <a class="text-white" href="#">Forgot Password</a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center mt-3 text-white">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Amplitude | All rights reserved
            </div>

        </div>
    </div>
@endsection
