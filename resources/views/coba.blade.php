@extends('template')
@section('main')
    <h1>Ini halaman Coba</h1>
    {{-- <video src="{{ asset('video.mp4') }}"></video> --}}


    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2)
            <img src="{{ asset('photo-1525373698358-041e3a460346.jpeg') }}" alt="" width="150px">
        @endif
    @endfor
@endsection
