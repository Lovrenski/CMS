<div class="sb-widget">
    <h2 class="sb-title">Recent Contents</h2>
    <div class="latest-news-widget">
        @foreach ($recent as $r)
            <div class="ln-item">
                <img src="{{ asset('storage/' . $r->foto) }}" alt="">
                <div class="ln-text">
                    <div class="ln-date">{{ $r->created_at->diffForHumans() }}</div>
                    <a href="{{ $r->slug }}">
                        <h6>{{ $r->title }}</h6>
                    </a>
                    <div class="ln-metas">
                        <div class="ln-meta">By {{ $r->username }}</div>
                        <div class="ln-meta">in <a
                                href="/?category={{ $r->category->slug }}">{{ $r->category->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
