@extends('template')
@section('main')
    <h1>Tabel Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">JK</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['jk'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
