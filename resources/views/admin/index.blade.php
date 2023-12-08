@extends('admin.layouts.main')

@section('content')
    <h1 class="mb-4">Hello, {{ auth()->user()->name }}</h1>

    <div class="home-tab">
        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab"
                        aria-controls="overview" aria-selected="true">Overview</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                            <div>
                                <p class="statistics-title">Total Admin</p>
                                <h3 class="rate-percentage">{{ $admin }}</h3>
                            </div>
                            <div>
                                <p class="statistics-title">Total Contributor</p>
                                <h3 class="rate-percentage">{{ $contributor }}</h3>
                            </div>
                            <div>
                                <p class="statistics-title">Total Category</p>
                                <h3 class="rate-percentage">{{ $category }}</h3>
                            </div>
                            <div class="d-none d-md-block">
                                <p class="statistics-title">Total Carousel</p>
                                <h3 class="rate-percentage">{{ $carousel }}</h3>
                            </div>
                            <div class="d-none d-md-block">
                                <p class="statistics-title">Total Content</p>
                                <h3 class="rate-percentage">{{ $contents }}</h3>
                            </div>
                            <div class="d-none d-md-block">
                                <p class="statistics-title">Total Gallery</p>
                                <h3 class="rate-percentage">{{ $gallery }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
