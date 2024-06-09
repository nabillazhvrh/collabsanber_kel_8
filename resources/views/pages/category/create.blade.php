@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form New Category</h6>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-12 mb-3 mb-sm-0">
                            <label for="nama_customer">Nama Category</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Category">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <div class="col-sm-2">
                            <a href="{{ route('category.index') }}" class="btn btn-danger btn-block btn">
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
