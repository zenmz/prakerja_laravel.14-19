@extends('template')
@section('main')
    <h1>Upload File</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih File</label>
            <input type="file" class="form-control-file" name="images">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Images</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/' . $item->images) }}" alt="" width="200px"></td>
                    <td>
                        <a href="{{ route('upload.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('upload.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
