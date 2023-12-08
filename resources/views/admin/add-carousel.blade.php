@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Add Carousel</h2>
            </div>
            <form action="/admin/tambah-carousel" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="title" required autofocus>
                </div>
                <div class="form-group">
                    <label for="foto">Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-4">
                    <input type="file" class="form-control h-auto @error('foto') is-invalid @enderror" name="foto"
                        id="foto" onchange="previewImage()" required>
                </div>
                <a href="/admin/carousels" class="btn btn-secondary me-2">Back</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
