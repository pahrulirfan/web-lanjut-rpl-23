@extends('layout.be.template')
@section('title', 'Tamba Products')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Products</div>
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

                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>price</label>
                            <input type="text" name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Category</label>

                            <select name="category_id" class="form-select">

                                @foreach($data_category as $row)

                                    <option value="{{ $row->id }}">{{ $row->name }}</option>

                                @endforeach

                            </select>

                            {{-- <input type="text" name="category_id" class="form-control"> --}}
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                        <a href="{{ route('products.index')}}" class="btn btn-warning">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
