<!-- Footer section -->
<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-widget">
                    <div class="about-widget">
                        <h2 class="mb-2" style="color: #10ddb4;">{{ $config->web_title }}</h2>
                        <p>{!! $config->web_profile !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget">
                    <h2 class="fw-title">Categories</h2>
                    <ul>
                        @foreach ($categories as $cat)
                            <li><a href="/?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="footer-widget">
                    <h2 class="fw-title">Quick Link</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        @foreach ($categories as $cat)
                            <li><a href="/?category={{ $cat->slug }}">{{ $cat->name }}</a></li>
                        @endforeach
                        <li><a href="/about">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget fw-latest-post">
                    <h2 class="fw-title">Recent Contents</h2>
                    <div class="latest-news-widget">
                        @foreach ($footer as $f)
                            <div class="ln-item">
                                <div class="ln-text">
                                    <div class="ln-date">{{ $f->created_at->diffForHumans() }}</div>
                                    <a href="/content/{{ $f->slug }}">
                                        <h6>{{ $f->title }}</h6>
                                    </a>
                                    <div class="ln-metas">
                                        <div class="ln-meta">By {{ $f->username }}</div>
                                        <div class="ln-meta">in <a
                                                href="/?category={{ $f->category->slug }}">{{ $f->category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright"><a href="mailto:{{ $config->email }}">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This website is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="mailto:{{ $config->email }}" target="_blank">WhiteCode</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="{{ $config->instagram }}" target="_blank"><i
                        class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="{{ $config->facebook }}" target="_blank"><i
                        class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="mailto:{{ $config->email }}" target="_blank"><i
                        class="fa fa-envelope"></i><span>email</span></a>
            </div>
        </div>
    </div>
</div>
<!-- Footer section end -->
