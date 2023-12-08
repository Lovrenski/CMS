@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h2>Add Content</h2>
            </div>
            @foreach ($content as $c)
                <form action="/admin/update-content/{{ $c->id }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title', $c->title) }}" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <input type="hidden" name="body" value="{{ old('body', $c->body) }}">
                        <div id="editor" style="min-height: 160px;">{!! old('body', $c->body) !!}</div>
                    </div>
                    <div class="form-group">
                        <label for="foto">Image</label>
                        <input type="hidden" name="oldFoto" value="{{ old('foto', $c->foto) }}">
                        @if ($c->foto)
                            <img class="img-preview img-fluid mb-3 col-sm-4" src="{{ asset('storage/' . $c->foto) }}">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-4">
                        @endif
                        <input type="file" class="form-control h-auto @error('foto') is-invalid @enderror" name="foto"
                            id="foto" onchange="previewImage()">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-select" name="category_id" id="category_id">
                            @foreach ($categories as $cat)
                                @if (old('category_id', $c->category_id) == $cat->id)
                                    <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                @else
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <a href="/admin/contents" class="btn btn-secondary me-2">Back</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            @endforeach
        </div>
    </div>
@endsection
