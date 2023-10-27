@extends('layout.be.template')
@section('title', 'Edit Supplier')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Supplier</div>
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

                    <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label>Nama Kategory</label>
                            <input type="text" name="nama_pt" class="form-control" value="{{ $supplier->nama_pt }}">
                        </div>
                        <div class="mb-3">
                            <label>Nama Ketua</label>
                            <input type="text" name="nama_ketua" class="form-control"
                                value="{{ $supplier->nama_ketua }}">
                        </div>
                        <div class="mb-3">
                            <label>Nomor Kontak</label>
                            <input type="text" name="nomor_kontak" class="form-control"
                                value="{{ $supplier->nomor_kontak }}">
                        </div>
                        <div class="mb-3">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $supplier->alamat }}">
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