@extends('visitors.layouts.main')

@section('content')
    <div class="col-lg-8">
        @if (request('category'))
            <h2 class="text-white mb-4">{{ $head }}</h2>
        @endif
        @if ($contents->count())
            @foreach ($contents as $c)
                <div class="blog-post review-post">
                    <img src="{{ asset('storage/' . $c->foto) }}">
                    <div class="post-date">{{ $c->created_at->diffForHumans() }}</div>
                    <h3>{{ $c->title }}</h3>
                    <div class="post-metas">
                        <div class="post-meta">By <a href="/?author={{ $c->username }}">{{ $c->username }}</a></div>
                        <div class="post-meta">in <a href="/?category={{ $c->category->slug }}">{{ $c->category->name }}</a>
                        </div>
                    </div>
                    <a href="/content/{{ $c->slug }}" class="site-btn mt-3">Read More</a>
                </div>
            @endforeach
        @else
            <h4 class="text-white fs-4">No content found &#128532</h4>
        @endif
        <div class="my-4 d-flex justify-content-center">
            {{ $contents->links() }}
        </div>
    </div>
@endsection
