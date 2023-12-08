@extends('admin.layouts.main')

@section('content')
    <h2 class="mt-2 mb-4">Manage Carousel</h2>

    <a href="/admin/add-carousel" class="btn btn-primary mb-4">Add Carousel</a>

    @if (session()->has('tambahCarousel'))
        <div class="alert alert-success" role="alert">
            {{ session('tambahCarousel') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('deleteCarousel'))
        <div class="alert alert-success" role="alert">
            {{ session('deleteCarousel') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($dataCarousel->count())
        <div class="row my-auto ">
            <div class="col-lg-12 row">
                @foreach ($dataCarousel as $carousel)
                    <div class="col-md-6 my-3">
                        <div class="card shadow">
                            <img src="{{ asset('storage/' . $carousel->foto) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title m-0">{{ $carousel->title }}</h5>
                                <form action="/admin/carousel/{{ $carousel->id }}" class="mt-3">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="confirm('Are you sure?')"
                                        class="btn btn-icon btn-sm btn-danger"><i
                                            class="menu-icon mdi mdi-delete"></i></button>
                                    <a href="/admin/edit-carousel/{{ $carousel->id }}"
                                        class="btn btn-icon btn-sm btn-primary"><i class="menu-icon mdi mdi-pencil"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            Oops! Anda belum menambahkan Carousel!
        </div>
    @endif
@endsection
