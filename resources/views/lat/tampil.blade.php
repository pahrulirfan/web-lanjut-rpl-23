@extends('layout.be.template')
@section('title', 'Data Latihan')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Halaman</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->jumlah_halaman }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection
