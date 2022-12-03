@extends('dashboard.layouts.main')
@section('container')
    <a href="/dashboard-user/post/create" class="btn btn-dark my-2" id="btn-create">Create Post</a>
    <a href="/dashboard-user/post" class="btn btn-outline-success"><i class="bi bi-arrow-clockwise"></i></a>
    <form class="d-flex" action="/dashboard-user/post" method="GET">
        <input class="form-control mb-3" type="search" placeholder="Search by title" aria-label="Search" name="search"
            value="{{ request('search') }}" id="head">
        <button class="btn btn-outline-dark mx-3" style="height: 40px" type="submit"><i class="bi bi-search"></i></button>
    </form>

    @if ($posts->count())
    <div class="cards d-flex mb-3 shadow">
        <a class="text-dark text-decoration-none" href="/dashboard-user/post/{{ $posts[0]->slug }}"
            style="width: 100%">
            <div class="card flex-row" style="width: 100%;height:10rem">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top rounded-0" style="width: 250px; object-fit:cover"
                    alt="...">
                <div class="card-body" style="width:">
                    <p class="card-text fw-semibold">{{ $posts[0]->title }}</p>
                    <p class="text-muted">Posted &bull; {{ $posts[0]->created_at->translatedFormat('l, d M Y H:i') }} WIB</p>
                </div>
            </div>
        </a>
    </div>

        @foreach ($posts->skip(1) as $post)
            <div class="cards d-flex mb-3 shadow">
                <a class="text-dark text-decoration-none" href="/dashboard-user/post/{{ $post->slug }}"
                    style="width: 100%">
                    <div class="card flex-row rounded-0" style="width: 100%;height:10rem;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top rounded-0" style="width: 250px; object-fit:cover"
                            alt="...">
                        <div class="card-body" style="width:">
                            <p class="card-text fw-semibold">{{ $post->title }}</p>
                            <p class="text-muted">Posted &bull; {{ $post->created_at->translatedFormat('l, d M Y H:i') }} WIB</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        @else
        <p class="text-center">No post found.</p>
        @endif

        <style>

            .card:hover{
                filter: brightness(90%);
            }

            #btn-create:hover {
                background: transparent;
                color: black
            }

            @media screen and (max-width:640px) {

                .card-img-top {
                    display: none;
                }
            }
        </style>
    @endsection
