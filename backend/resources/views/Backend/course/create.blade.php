@extends('layouts.backend_master')
@section('title', 'Course')
@section('master_content')

    <div class="row">
        <div class="col-md-7">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-info">{{ $course->name }}</h2>
                    <a href="{{ route('admin.courses.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.courses.store', $course->slug) }}" method="post">
                        @csrf
                        <div class="my-2">
                            <label for="">Title : </label>
                            <input type="text" class="form-control" name="title" placeholder="Enter video title">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Link : </label>
                            <input type="text" class="form-control" name="link" placeholder="Enter video link">
                            @error('link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <label for="">Order : </label>
                            <input type="number" min="1" class="form-control" name="order"
                                placeholder="Enter video order">
                            @error('order')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Status : </label>
                            <input type="radio" name="status" value="1"> Active
                            <input type="radio" name="status" value="0"> Inactive
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2">
                            <button class="btn-sm btn-success w-100">Submit Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
