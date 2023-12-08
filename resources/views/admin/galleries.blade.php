@extends('admin.layouts.main')

@section('content')
    <h2 class="mt-2 mb-4">Manage Gallery</h2>

    <a href="/admin/add-gallery" class="btn btn-primary mb-4">Add Gallery</a>

    @if (session()->has('tambahGallery'))
        <div class="alert alert-success" role="alert">
            {{ session('tambahGallery') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('deleteGallery'))
        <div class="alert alert-success" role="alert">
            {{ session('deleteGallery') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($gallery->count())
        <div class="row my-auto ">
            <div class="col-lg-12 row">
                @foreach ($gallery as $g)
                    <div class="col-md-6">
                        <div class="card shadow">
                            <img src="{{ asset('storage/' . $g->foto) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title m-0">{{ $g->title }}</h5>
                                <form action="/admin/gallery/{{ $g->id }}" class="mt-3">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="confirm('Are you sure?')"
                                        class="btn btn-icon btn-md float-end btn-danger"><i
                                            class="mdi mdi-delete"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            Oops! Anda belum menambahkan <b>Gallery</b>!
        </div>
    @endif
@endsection
