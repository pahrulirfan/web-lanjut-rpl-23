@extends('layout.be.template')
@section('title', 'Data Products')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-10">

            <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Data
            </a>

            <div class="card">
                <div class="card-header">Data Products</div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{{ $row->price }}</td>

                                <td>{{ $row->category?->name }}</td>

                                <td>
                                    <form method="POST" action="{{ route('products.destroy', $row->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Del" class="btn btn-danger">

                                        <a href="{{ route('products.edit', $row->id) }}"
                                            class="btn btn-warning">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
