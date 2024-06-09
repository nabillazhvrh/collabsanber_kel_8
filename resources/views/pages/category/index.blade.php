@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header d-sm-flex align-items-center justify-content-between py-3 ">
                <h6 class="m-0 font-weight-bold text-primary">Data Category</h6>
                <div>
                    <a href="{{ route('category.create') }}"
                        class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm">
                        <i class="fas fa-plus fa-sm"></i> Tambah Category</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="produk" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $data->id) }}" class="btn btn-sm btn-primary"
                                            title="Edit"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('category.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-trash"></i></button>
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
    <script>
        $(document).ready(function() {
            $('#produk').DataTable();
        });
    </script>
@endsection
