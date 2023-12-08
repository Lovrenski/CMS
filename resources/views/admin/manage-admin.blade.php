@extends('admin.layouts.main')

@section('content')
    @if (session()->has('tambahAdmin'))
        <div class="alert alert-success" role="alert">
            {{ session('tambahAdmin') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('deleteAdmin'))
        <div class="alert alert-success" role="alert">
            {{ session('deleteAdmin') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h3 class="mb-4">Manage Admin</h3>
    <a class="btn btn-primary mb-4" href="/admin/add-admin">Add Admin</a>
    @if ($dataAdmin->count())
        <div class="row table-responsive">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Recent Login</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($dataAdmin as $admin)
                            <tbody>
                                <td>{{ $no++ }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->recent_login }}</td>
                                <td>
                                    <form action="/admin/delete-admin/{{ $admin->id }}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-danger" onclick="confirm('Are you sure?')"><i
                                                class="menu-icon mdi mdi-delete"></i></button>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            Belum ada Admin!
        </div>
    @endif
@endsection
