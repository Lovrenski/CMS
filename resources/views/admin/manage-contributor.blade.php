@extends('admin.layouts.main')

@section('content')
    @if (session()->has('tambahContributor'))
        <div class="alert alert-success" role="alert">
            {{ session('tambahContributor') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('deleteContributor'))
        <div class="alert alert-success" role="alert">
            {{ session('deleteContributor') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h3 class="mb-4">Manage Contributor</h3>
    <a class="btn btn-primary mb-4" href="/admin/add-contributor">Add Contributor</a>
    @if ($dataContributor->count())
        <div class="row table-responsive">
            <div class="card">
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
                        @foreach ($dataContributor as $contributor)
                            <tbody>
                                <td>{{ $no++ }}</td>
                                <td>{{ $contributor->username }}</td>
                                <td>{{ $contributor->name }}</td>
                                <td>{{ $contributor->recent_login }}</td>
                                <td>
                                    <form action="/admin/delete-contributor/{{ $contributor->id }}" method="POST">
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
            Belum ada Contributor!
        </div>
    @endif
@endsection
