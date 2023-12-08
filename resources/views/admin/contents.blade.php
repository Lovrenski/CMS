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
    @if (session()->has('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h2>All Contents</h2>
    <a href="/admin/add-content" class="btn btn-primary my-3">Add Content</a>
    @if ($contents->count())
        <div class="card shadow table-responsive">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Username</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </thead>
                    @foreach ($contents as $c)
                        <tbody>
                            <td>{{ $no++ }}</td>
                            <td>{{ $c->title }}</td>
                            <td>{{ $c->category->name ?? 'No Category' }}</td>
                            <td>{{ $c->username }}</td>
                            <td>{{ $c->created_at->diffForHumans() }}</td>
                            <td>{{ $c->updated_at->diffForHumans() }}</td>
                            <td>
                                <form action="/admin/delete-content/{{ $c->id }}" method="POST">
                                    @csrf
                                    <a class="btn btn-sm btn-secondary" href="/admin/show-content/{{ $c->id }}"><i
                                            class="menu-icon mdi mdi-eye"></i></a>
                                    <a class="btn btn-sm btn-primary" href="/admin/edit-content/{{ $c->id }}"><i
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
            Oops! Anda belum membuat <b>Content</b>!
        </div>
    @endif
@endsection
