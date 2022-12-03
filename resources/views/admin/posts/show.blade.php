@extends('adminlte::page')
@section('title', 'Post View')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<section>
    <article>
        <div class="container">
            <div class="row my-3">
            <div class="col-lg-8 mt-3">
            <div class="header-show">
                <h5 class="fs-1">{{ $post->title }}</h5>
                <p class="text-muted" style="color: #121212">Published: {{ $post->created_at->translatedFormat('l, d F Y H:i') }}</p>
                <p>Posted by:  <a href="/authors/{{ $post->author->id }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
                <div class="action my-4">
                    <a href="/admin/post" class="btn badge bg-success text-decoration-none"><span><i class="bi bi-arrow-left-short fs-5"></i></span></a>
                    <a href="/admin/post/{{ $post->slug }}/edit" class="btn badge bg-warning text-decoration-none mx-1"><span><i class="bi bi-pencil-square fs-5"></i></span></a>
                    <form action="{{ url('/admin/post' . '/' . $post->slug) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm(&quot;Post Akan Dihapus?&quot;)"
                            class="badge bg-danger border-0" id="del-btn"> <span><i class="bi bi-trash fs-5"></i></span></button>
                    </form>
                </div>
            </div>
            <img class="img-fluid m-auto" width="100%" src="{{ asset('storage/' . $post->image) }}" alt="">
            <div class="news-body mt-3 fs-6">
                <p class="my-3">{!! $post->body !!}</p>
            </div>
        </div>
        </div>
        </div>
    </article>
</section>
@stop
