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
                    <table id=" table_id" class="display table table-bordered text-center">
                        <thead class="text-center">
                            <tr>
                                <th width="" class="d-flex"><input type="checkbox" id="allIdSelect"
                                        class="form-control-sm"></th>
                                <th width="1%">SL</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr class="text-center">
                                <td>1</td>
                                <td>Shahin</td>
                                <td>Demo Subject</td>
                                <td>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-sm btn-warning">New</button>
                                    </form>
                                    <button class="btn btn-sm btn-success">Seen</button>
                                </td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info">Reply</a>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="viewData">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        function getAllData() {
            axios.get("{{ route('admin.contact.all') }}")
                .then((res) => {
                    table_data_row_old(res.data)
                })
        }
        getAllData();

        function table_data_row(items) {
            let loop = items.map((item, index) => {
                return `
            <tr>
                <td>${++index}</td>
                <td>${item.name}</td>
                <td>${item.subject}</td>
                <td>${!item.is_seen ? '<button class="btn btn-sm btn-warning">New</button>'  : '<button class="btn btn-sm btn-success">Seen</button>'}</td>
                <td class="text-center">
                    <a href="" class="btn btn-sm btn-success" data-id="${item.slug}" data-toggle="modal" data-target="#viewModal" id="viewRow"><i class="fa fa-eye"></i></a>
                    <a href="" class="btn btn-sm btn-info" data-id="${item.slug}" data-toggle="modal" data-target="#editModal" id="editRow"><i class="fa fa-edit"></i></a>
                    <a href="" id="deleteRow" class="btn btn-sm btn-danger" data-id="${item.slug}"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
            `
            });
            loop = loop.join("")
            const tbody = $('#tbody')
            tbody.html(loop)
        }

        function table_data_row_old(data) {
            var rows = '';
            var i = 0;
            $.each(data, function(key, value) {

                rows = rows + '<tr>';
                rows +=
                    '<td width="2%"><input type="checkbox" id="checkBoxItem" class="form-control-sm checkBoxItem" name="ids" value="' +
                    value.id + '"></td>'
                rows = rows + '<td>' + ++i + '</td>';
                rows = rows + '<td>' + value.name + '</td>';
                rows = rows + '<td>' + value.subject + '</td>';
                rows = rows + '<td class="text-center">';
                if (value.is_seen == 0) {
                    rows = rows + ' <button class="badge badge-danger" data-id="' + value.id +
                        '" id="makeSeen">New</button>';
                } else {
                    rows = rows + ' <button class="badge badge-success" data-id="' + value.id +
                        '" id="makeInactive">Seen</button>';
                }
                rows = rows + '<td>' + value.created_at + '</td>';
                rows += '</td>';
                rows = rows + '<td data-id="' + value.id + '" class="text-center">';
                rows = rows + '<a class="btn btn-sm btn-info text-light" id="viewRow" data-id="' + value.id +
                    '" data-toggle="modal" data-target="#viewModal">View</a> ';
                rows = rows + '<a class="btn btn-sm btn-danger text-light"  id="deleteRow" data-id="' + value.id +
                    '" >Delete</a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            });
            $("tbody").html(rows);
            // $('#dataTable').dataTable();
        }

        // view
        $('body').on('click', '#viewRow', function() {
            let id = $(this).data('id');
            axios.get(`${base_url_admin}/contact/${id}`)
                .then(res => {
                    let {
                        data: contact
                    } = res
                    let viewData = $('#viewData');
                    viewData.html(`
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td>${contact.name}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>${contact.email}</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>${contact.subject}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>${contact.created_at}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>${contact.is_seen ? '<span class="badge badge-success">Seen</span>' : '<span class="badge badge-warning">Not Seen</span>'}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>${contact.message}</td>
            </tr>
        </table>
        `);
                });
        });
    </script>
@endpush
