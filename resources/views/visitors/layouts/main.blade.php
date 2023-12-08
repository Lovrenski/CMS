<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="TheQuest Gaming Magazine Template">
    <meta name="keywords" content="gaming, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="/assetss/img/n4-logo.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assetss/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assetss/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/assetss/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assetss/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assetss/css/animate.css" />
    <link rel="stylesheet" href="/assetss/css/slicknav.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="/assetss/css/style.css" />


    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    @include('visitors.layouts.navbar')
    <!-- Header section end -->

    @include('visitors.layouts.hero')

    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">

                @yield('content')

                <div class="col-lg-4 sidebar">
                    <div class="sb-widget">
                        <form class="sb-search" action="/">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <input type="text" placeholder="Search" name="search" value="{{ request('search') }}">
                        </form>
                    </div>

                    {{-- Categories --}}
                    @include('visitors.layouts.categories')
                    {{-- End Categories --}}

                    {{-- Recent Contents --}}
                    @include('visitors.layouts.recent')
                    {{-- End Recent --}}

                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->

    {{-- Footer --}}
    @include('visitors.layouts.footer')
    {{-- End Footer --}}

    <!--====== Javascripts & Jquery ======-->
    <script src="/assetss/js/jquery-3.2.1.min.js"></script>
    <script src="/assetss/js/bootstrap.min.js"></script>
    <script src="/assetss/js/jquery.slicknav.js"></script>
    <script src="/assetss/js/owl.carousel.min.js"></script>
    <script src="/assetss/js/circle-progress.min.js"></script>
    <script src="/assetss/js/jquery.magnific-popup.min.js"></script>
    <script src="/assetss/js/main.js"></script>

</body>

</html>
