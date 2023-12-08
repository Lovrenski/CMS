@extends('visitors.layouts.main')

@section('content')
    <div class="col-lg-8">

        @foreach ($galleries as $g)
            <div class="blog-post review-post">
                <img src="{{ asset('storage/' . $g->foto) }}">
                <div class="post-date">{{ $g->created_at->diffForHumans() }}</div>
                <h3>{{ $g->title }}</h3>
            </div>
        @endforeach

        <div class="my-4 d-flex justify-content-center">
            {{ $galleries->links() }}
        </div>

    </div>
@endsection
