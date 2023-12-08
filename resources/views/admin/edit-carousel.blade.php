@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Edit Carousel</h2>
            </div>
            @foreach ($carousel as $c)
                <form action="/admin/update-carousel/{{ $c->id }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $c->title) }}" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="foto">Image</label>
                        <input type="hidden" name="oldFoto" value="{{ $c->foto }}">
                        @if ($c->foto)
                            <img class="img-preview img-fluid mb-3 col-sm-4" src="{{ asset('storage/' . $c->foto) }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-4">
                        @endif
                        <input type="file" class="form-control h-auto @error('foto') is-invalid @enderror" name="foto"
                            id="foto" onchange="previewImage()">
                    </div>
                    <a href="/admin/carousel" class="btn btn-secondary me-2">Back</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection
