@extends('layout.be.template')
@section('title', 'Edit Category')
@section('content')

<div class="container px-4 mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Kategory</div>
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

                    <form action="{{ route('category-update', $data->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label>Nama Kategory</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                        </div>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                        <a href="{{ route('category-index')}}" class="btn btn-warning">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection