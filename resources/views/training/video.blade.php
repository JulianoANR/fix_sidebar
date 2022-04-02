@extends('layouts.model')
@section('titulo', 'Compliance Training')

@section('content')

<div class="d-flex justify-content-center">
    <div class="ratio ratio-16x9" style="width: 80%; heigth: 80%;">
        {{-- Para retirar dowload controlsList="nodownload" --}}
        <video width="100%" height="100%" controls="controls" autoplay="autoplay" id="videoTeste">
            <source src="{{ asset('videos/treinamento-compilance.m4v') }}" type="video/mp4">
            {{-- <object data="" width="100%" height="100%">
                <embed width="100%" height="100%" src="{{ asset('videos/treinamento-compilance.m4v') }}">
            </object> --}}
            Your browser does not support the video tag.
        </video>

    </div>
</div>

@endsection
