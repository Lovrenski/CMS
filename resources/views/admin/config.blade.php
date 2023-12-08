@extends('admin.layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('add'))
        <div class="alert alert-success" role="alert">
            {{ session('add') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($config->count())
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Edit Configuration</h3>
                <p class="card-description">
                    Edit your configuration
                </p>
                <form class="forms-sample" action="/admin/update-config" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="web_title">Web Title</label>
                        <input type="text" name="web_title" value="{{ $config[0]->web_title }}" class="form-control"
                            id="web_title">
                    </div>
                    <div class="form-group">
                        <label for="web_profile">Web Profile</label>
                        <input type="hidden" name="web_profile" value="{{ old('web_profile', $config[0]->web_profile) }}">
                        <div id="editor" style="min-height: 160px;">{!! old('web_profile', $config[0]->web_profile) !!}</div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" value="{{ $config[0]->instagram }}" class="form-control"
                            id="instagram">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" value="{{ $config[0]->facebook }}" class="form-control"
                            id="facebook">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ $config[0]->email }}" class="form-control"
                            id="email">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" value="{{ $config[0]->address }}" class="form-control"
                            id="address">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" fdprocessedid="rq4msl">Submit</button>
                </form>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Add Configuration</h3>
                <p class="card-description">
                    Add your configuration about the website
                </p>
                <form class="forms-sample" action="/admin/tambah-config" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="web_title">Web Title</label>
                        <input type="text" name="web_title" class="form-control" id="web_title">
                    </div>
                    <div class="form-group">
                        <label for="web_profile">Web Profile</label>
                        <input type="hidden" name="web_profile">
                        <div id="config" style="min-height: 160px;"></div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram">
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                    <button type="submit" class="btn btn-primary me-2" fdprocessedid="rq4msl">Submit</button>
                </form>
            </div>
        </div>
    @endif
@endsection
