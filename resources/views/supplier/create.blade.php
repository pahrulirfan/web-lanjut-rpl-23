@extends('layout.be.template')
@section('title', 'Tamba Category')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Kategory</div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('supplier.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Nama Kategory</label>
                            <input type="text" name="nama_pt" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nama Ketua</label>
                            <input type="text" name="nama_ketua" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Kontak</label>
                            <input type="text" name="nomor_kontak" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                        <a href="{{ route('supplier.index')}}" class="btn btn-warning">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection