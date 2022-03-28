@extends('layouts.backend_master')
@section('title', 'Contact')
@section('master_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h2 class="text-info">Manage Contact</h2>
                </div>
                <div class="card-body">
                    <table id=" table_id" class="display table table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Text</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    {{-- <td>{{ $contact->status == 1 ? 'Acitve' : 'Inactive' }}</td> --}}
                                    <td>{{ $contact->created_at->diffForHumans() }}</td>
                                    <td>0</td>
                                    <td>
                                        {{-- <a href="{{ route('admin.contacts.create', $contact->slug) }}"
                                            class="btn btn-sm btn-success"><i class="fa fa-plus"></i></a>
                                        <a href="{{ route('admin.contacts.view', $contact->slug) }}"
                                            class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                        <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> --}}
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

@push('script')
@endpush
