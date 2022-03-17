@extends('layouts.backend_master')
@section('title', 'Course')
@section('master_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-info">{{ $course->name }}</h2>
                    <a href="{{ route('admin.courses.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $course->name }}</td>
                            <th>Duration</th>
                            <td>{{ $course->duration }}</td>
                            <th>Videos</th>
                            <td>{{ $course->videos->count() }}</td>
                            <th>Status</th>
                            <td>{{ $course->status == 1 ? 'Acitve' : 'Inactive' }}</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-center">
                                <img src="{{ asset($course->image) }}" alt="" width="250px">
                            </td>
                            <td colspan="4" class="text-center">
                                <img src="{{ asset($course->thumb) }}" alt="" width="250px">
                            </td>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td colspan="3">
                                <p>{{ $course->short_des }}</p>
                            </td>
                            <td>Long Description</td>
                            <td colspan="3">
                                <p>{{ $course->long_des }}</p>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <table id=" table_id" class="display table table-bordered">
                        <thead>
                            <th colspan="7" class="text-center"> Videos</th>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Video</th>
                                <th>Status</th>
                                <th>Published</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course->videos as $video)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $video->title }}</td>
                                    <td>
                                        <iframe src="{{ $video->link }}" frameborder="0" width="100px"
                                            height="70px"></iframe>
                                    </td>
                                    <td>{{ $video->status == 1 ? 'Acitve' : 'Inactive' }}</td>
                                    <td>{{ $video->created_at->diffForHumans() }}</td>
                                    <td>0</td>
                                    {{-- <td>
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                                        <a href="{{ route('admin.videos.view', $video->slug) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td> --}}
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
