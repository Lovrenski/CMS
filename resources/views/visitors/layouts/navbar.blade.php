<header class="header-section">
    <a href="/" class="site-logo">
        <img src="/assetss/img/n4-p.png" alt="logo">
    </a>
    <ul class="main-menu">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        @foreach ($categories as $cat)
            <li><a href="/?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
        @endforeach
        <li><a href="/galleries">Galleries</a></li>
        <li><a href="/contact">Contact Me</a></li>
        @if (auth()->user())
            <li><a href="/admin">Admin Page</a></li>
        @else
            <li><a href="/login">Login</a></li>
        @endif
    </ul>
</header>
