@extends('visitors.layouts.main')

@section('content')
    <div class="col-lg-8">
        <div class="blog-post single-post">
            <img src="{{ asset('storage/' . $content->foto) }}">
            <div class="post-date">{{ $content->created_at->diffForHumans() }}</div>
            <h3>{{ $content->title }}</h3>
            <div class="post-metas">
                <div class="post-meta">By <a href="/?author={{ $content->username }}">{{ $content->username }}</a></div>
                <div class="post-meta">in <a
                        href="/?category={{ $content->category->slug }}">{{ $content->category->name }}</a></div>
            </div>
            {{-- Body --}}
            <p>
                {!! $content->body !!}
            </p>
            {{-- End Body --}}
            <a href="/" class="site-btn">Back</a>
        </div>
    </div>
@endsection
