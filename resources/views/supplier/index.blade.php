@extends('layout.be.template')
@section('title', 'Data Category')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-12">

            <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Tambah Data
            </a>

            <div class="card">
                <div class="card-header">Data Kategory</div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama PT</th>
                                <th>Nama Ketua</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_pt }}</td>
                                <td>{{ $row->nama_ketua }}</td>
                                <td>{{ $row->nomor_kontak }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>
                                    <form method="POST" action="{{ route('supplier.destroy', $row->id) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Del" class="btn btn-danger">

                                        <a href="{{ route('supplier.edit', $row->id) }}"
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