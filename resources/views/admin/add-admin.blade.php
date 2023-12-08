@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Add Admin</h2>
            </div>
            <form action="/admin/tambah-admin" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" autofocus required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="name" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <input type="hidden" name="level" value="Admin">
                </div>
                <a href="/admin/manage-admin" class="btn btn-secondary me-2">Back</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
