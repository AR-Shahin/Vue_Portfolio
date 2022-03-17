@extends('layouts.backend_master')
@section('title', 'Course')
@section('master_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-info">Manage Crud</h2>
                </div>
                <div class="card-body">
                    <table id=" table_id" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Published</th>
                                <th>View</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>
                                        <img src="{{ asset($course->image) }}" alt="" width="100px">
                                    </td>
                                    <td>{{ $course->status == 1 ? 'Acitve' : 'Inactive' }}</td>
                                    <td>{{ $course->created_at->diffForHumans() }}</td>
                                    <td>0</td>
                                    <td>
                                        <a href="{{ route('admin.courses.create', $course->slug) }}"
                                            class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                                        <a href="{{ route('admin.courses.view', $course->slug) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
@endpush
@push('script')
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script>
        $('#table_id').DataTable();
    </script>
@endpush
