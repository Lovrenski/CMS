<div class="sb-widget">
    <h2 class="sb-title">Categories</h2>
    <ul class="sb-cata-list">
        @foreach ($categories as $cat)
            <li><a href="/?category={{ $cat->slug }}">{{ $cat->name }}<span>{{ $no++ }}</span></a></li>
        @endforeach
    </ul>
</div>
