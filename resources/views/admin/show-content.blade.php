@extends('admin.layouts.main')

@section('content')
    <div class="row my-3">
        <div class="card col-lg-8 p-4 mb-4">
            <h2 class="mb-4">{{ $content->title }}</h2>
            <img src="{{ asset('storage/' . $content->foto) }}" class="col-md-6 img-fluid">
            <article class="fs-6 mt-4">
                {!! $content->body !!}
            </article>
        </div>
        <div class="col-md-8">
            <a href="/admin/contents" class="btn btn-primary">Back to Contents</a>
        </div>
    </div>
@endsection
