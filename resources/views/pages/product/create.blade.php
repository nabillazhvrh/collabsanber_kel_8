@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form New Product</h6>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_customer">Nama Product</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Product">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_customer">Category Product</label>
                            <select name="category_id" class="form-control">
                                <option value="">--Pilih Category--</option>
                                @foreach ($category as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_customer">Harga Product</label>
                            <input type="number" name="price" class="form-control" value="0">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="nama_customer">Photo Product</label>
                            <input type="file" name="photos" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="nama_customer">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-sm-2">
                            <a href="{{ route('products.index') }}" class="btn btn-danger btn-block btn">
                                <i class="fas fa-arrow-left fa-fw"></i> Kembali
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-save fa-fw"></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('desc');
    </script>
@endsection
