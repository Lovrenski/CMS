@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Edit Category</h2>
            </div>
            <form action="/admin/update-category/{{ $category->id }}" method="POST" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" value="{{ old('name', $category->name) }}" name="name"
                        id="name">
                </div>
                <a href="/admin/category" class="btn btn-secondary me-2">Back</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
