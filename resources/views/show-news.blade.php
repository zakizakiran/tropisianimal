@extends('layouts.main')
@section('container')

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('custom.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<header class="masthead-about" id="masthead-about">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100">
            <div class="col-lg-10" id="title1">
                <h1 class="news-title-show text-white" id="news-title">{{ $post->title }}</h1>
                <small class="text-white" style="font-family: poppinsRegular;">{{ $post->created_at->translatedFormat('l, d F Y H:i') }} WIB</small>
                <p class="mt-3">By. {{ $post->author->name }}</p>
            </div>
        </div>
    </div>
</header>
<section>
    <article>
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-10">
                    <img class="img-fluid m-auto h-auto" src="{{ asset('storage/' . $post->image) }}" alt="">
                    <div class="news-body mt-5" style="font-family: poppinsRegular">
                        <p class="">{!! $post->body !!}</p>
                    </div>
                    <div class="footer-show-news d-flex justify-content-end mt-5">
                        <a class="fw-bold text-white text-decoration-none rounded badge bg-success fs-6" href="/berita">Kembali <i class="bi bi-arrow-right-short"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<style>

    #title1{
        margin-left: -2rem
    }

    @media screen and (max-width: 640px){
        #title1{
            margin-left: -1.5rem
        }

        #news-title{
            font-size: 1.5rem;
        }

        #masthead-about{
            height: 60vh;
        }

        header.masthead-about{
        padding-top: 8rem
    }
    }
</style>
@endsection
