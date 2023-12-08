@extends('admin.layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('edit'))
        <div class="alert alert-success" role="alert">
            {{ session('edit') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('deleteCategory'))
        <div class="alert alert-success" role="alert">
            {{ session('deleteCategory') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2 class="mb-4">Manage Category</h2>
    <a class="btn btn-primary mb-3" href="/admin/add-category">Add Category</a>
    @if ($category->count())
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($category as $cat)
                        <tbody>
                            <td>{{ $no++ }}</td>
                            <td>{{ $cat->name }}</td>
                            <td class="col-sm-4">
                                <form action="/admin/delete-category/{{ $cat->id }}" method="post">
                                    @csrf
                                    <a class="btn btn-sm btn-primary" href="/admin/edit-category/{{ $cat->id }}"><i
                                            class="menu-icon mdi mdi-pencil"></i></a>
                                    <button class="btn btn-sm btn-danger" onclick="confirm('Are you sure?')"><i
                                            class="menu-icon mdi mdi-delete"></i></button>
                                </form>
                            </td>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            Belum ada <b>Category</b>!
        </div>
    @endif
@endsection
