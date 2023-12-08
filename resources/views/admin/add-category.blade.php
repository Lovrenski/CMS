@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Add Category</h2>
            </div>
            <form action="/admin/tambah-category" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" required autofocus>
                </div>
                <a href="/admin/categories" class="btn btn-secondary me-2">Back</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
