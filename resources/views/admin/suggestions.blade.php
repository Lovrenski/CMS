@extends('admin.layouts.main')

@section('content')
    <h2 class="mb-4">Halaman Saran</h2>
    @if (session()->has('delete'))
        <div class="alert alert-success" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($suggest->count())
        @foreach ($suggest as $s)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $s->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $s->email }}</h6>
                    <p class="card-text">{{ $s->body }}</p>
                    <hr>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                        data-bs-target="#delete{{ $s->id }}">
                        <i class="menu-icon mdi mdi-delete"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete{{ $s->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Suggest</h1>
                                </div>
                                <div class="modal-body">
                                    Are you sure want to delete this?
                                </div>
                                <form action="/admin/suggest-delete/{{ $s->id }}" method="POST">
                                    @csrf
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Yes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-primary" role="alert">
            Belum ada <b>Saran</b>!
        </div>
    @endif
@endsection
