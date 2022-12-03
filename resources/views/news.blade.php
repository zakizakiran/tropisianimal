@extends('layouts.main')
@section('container')
    <header class="masthead-about" id="masthead-about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-6" id="title1" style="margin-left: -1rem">
                    <h1 class="text-white">Berita</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="berita-view" style="margin-top:6rem;" id="berita-view">
        <div class="container berita_container">
            @if ($posts->count())
                <div class="berita_left">
                    <img class="" src="{{ asset('storage/' . $posts[0]->image) }}" style="width:600px"
                        alt="">
                </div>

                <div class="berita_right" id="berita_right">
                    <div class="col">
                        <h1> {{ $posts[0]->title }} </h1>
                    </div>
                    <div class="col-lg-11">
                        <p class="berita-txt1 py-3">{{ $posts[0]->excerpt }}</p>
                        <a href="/berita/{{ $posts[0]->slug }}" class="btn text-lowercase" id="more-btn"
                            style="">Baca selengkapnya &nbsp; <img src="{{ asset('assets/arrow-right.svg') }}"
                                alt=""></a>
                    </div>
                </div>
        </div>
        @else
        <p>Post Not Found</p>
        @endif

    </section>

    <section class="berita-list" data-aos="fade-up" style="margin-top:4rem;">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-7">
                    <h2 class="membangun">Berita Lainnya</h2>
                </div>
                <div class="cards-berita">
                    @foreach ($posts->skip(1) as $post)
                        <div class="card" id="card-berita" style="">
                            <div class="overlay">
                                <div class="position-absolute p-2 text-white"
                                    style="background: rgba(0, 0, 0, 0.5);font-family: poppinsRegular" id="post-date">
                                    <small>{{ $post->created_at->diffForHumans() }}</small></div>
                                <img src="{{ asset('storage/' . $post->image) }}" style="object-fit: cover"
                                    class="card-img-top" alt="...">
                                <div class="middle">
                                    <div class="text">
                                        <a href="/berita/{{ $post->slug }}" class="btn btn-readmore">Selengkapnya</a>
                                    </div>
                                </div>
                                <div class="card-body-berita">
                                    <h5 class="card-title-berita text-center">{{ $post->title }}
                                    </h5>
                                    <p class="card-text-berita text-center">{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="pagination d-flex my-4">
        <div class="page m-auto">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
