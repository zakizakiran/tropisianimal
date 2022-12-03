@extends('adminlte::page')
@section('title', 'Post Settings')

@section('content_header')
    <h1 class="">Post Setting</h1>
@stop

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <style>
            a {
                text-decoration: none
            }

            #btn-create:hover {
                background: transparent;
                color: green
            }
        </style>
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <a href="/admin/post/create" class="btn btn-success my-2" id="btn-create">Create Post</a>
        <a href="/admin/post" class="btn btn-outline-dark"><i class="bi bi-arrow-clockwise"></i></a>
        <form class="d-flex" action="/admin/post" method="GET">
            <input class="form-control col-lg-8 mb-3" type="search" placeholder="Search by title" aria-label="Search"
                name="search" value="{{ request('search') }}" id="head">
            <button class="btn btn-outline-dark mx-3" style="height: 40px" type="submit"><i
                    class="bi bi-search"></i></button>
        </form>

        @if ($posts->count())
            <div class="cards d-flex shadow">
                <a class="text-dark text-decoration-none" href="/admin/post/{{ $posts[0]->slug }}" style="width: 100%">
                    <div class="card flex-row" style="height:10rem">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top rounded-0"
                            style="width: 250px; object-fit:cover" alt="...">
                        <div class="card-body">
                            <p class="card-text fw-semibold">{{ $posts[0]->title }}</p>
                            <p class="text-muted">Posted &bull;
                                {{ $posts[0]->created_at->translatedFormat('l, d M Y H:i') }} WIB</p>
                            <p class="text-muted">Posted by: {{ $posts[0]->author->name }}</p>
                        </div>
                    </div>
                </a>
            </div>

            @foreach ($posts->skip(1) as $post)
                <div class="cards d-flex shadow">
                    <a class="text-dark text-decoration-none" href="/admin/post/{{ $post->slug }}" style="width: 100%">
                        <div class="card flex-row rounded-0" style="width: 100%;height:10rem">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top rounded-0"
                                style="width: 250px; object-fit:cover" alt="...">
                            <div class="card-body" style="width:">
                                <p class="card-text fw-semibold">{{ $post->title }}</p>
                                <p class="text-muted">Posted &bull;
                                    {{ $post->created_at->translatedFormat('l, d M Y H:i') }} WIB</p>
                                <p class="text-muted">Posted by: {{ $post->author->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @else
            <p class="text-center">No post found.</p>
        @endif

    </body>


    <style>
        .card:hover {
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
@stop
