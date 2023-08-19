@extends('template')
@section('main')
    <h1>Hello {{ Auth::user()->name }}</h1>
    <h3>Ini halaman untuk user</h3>
@endsection