<!-- Hero section -->
@if ($hero == 'carousels' && !request('category') && !request('search') && !request('author'))
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            @foreach ($carousels as $car)
                <div class="hero-item set-bg" data-setbg="{{ asset('storage/' . $car->foto) }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>{{ $car->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
@if ($hero == 'content')
    <section class="page-top-section set-bg" data-setbg="{{ asset('storage/' . $content->foto) }}">
        <div class="container">
            <h2>{{ $content->title }}</h2>
        </div>
    </section>
@endif
@if ($hero == 'galleries')
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/1.jpg">
        <div class="container">
            <h2>Galleries</h2>
        </div>
    </section>
@endif
@if ($hero == 'about')
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/2.jpg">
        <div class="container">
            <h2>About</h2>
        </div>
    </section>
@endif
@if ($hero == 'contact')
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/2.jpg">
        <div class="container">
            <h2>Contact Me</h2>
        </div>
    </section>
@endif
@if (request('category') && !request('search'))
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/2.jpg">
        <div class="container">
            <h2>{{ $head }}</h2>
        </div>
    </section>
@endif
@if (request('author') && !request('search'))
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/1.jpg">
        <div class="container">
            <h2>{{ $head }}</h2>
        </div>
    </section>
@endif
@if (request('search') && !request('category'))
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/2.jpg">
        <div class="container">
            <h2>Searching for : {{ request('search') }}</h2>
        </div>
    </section>
@endif
@if (request('search') && request('category'))
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/2.jpg">
        <div class="container">
            <h2>Searching for : {{ request('search') }} in {{ request('category') }}</h2>
        </div>
    </section>
@endif
@if (request('search') && request('author'))
    <section class="page-top-section set-bg" data-setbg="/assetss/img/header-bg/1.jpg">
        <div class="container">
            <h2>Searching for : {{ request('search') }} in {{ request('author') }}</h2>
        </div>
    </section>
@endif
<!-- Hero section end -->
