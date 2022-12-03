@extends('layouts.main')
@section('container')
    {{-- HEADER --}}
    <header class="masthead" id="masthead" style="padding-bottom: -10rem">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-6" id="title1" style="margin-left: -1rem">
                    <h1 class="text-white">Hewan <br>Tropis di Dunia</h1>
                    <div class="col-lg-9">
                        <p class="header-txt" data-aos="fade-down">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo nam eos dolores maxime ad
                            distinctio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- END-OF-HEADER --}}

    {{-- ABOUT --}}
    <section class="tentang" style="margin-top:6rem" id="tentang">
        <div class="container tentang_container" data-aos="fade-right">
            <div class="tentang_left">
                <a href="/about" style="text-decoration: none">
                    <h6 class="about-title text-uppercase">TENTANG KAMI</h6>
                </a>
                <h1 class="membangun">Membangun Komunitas Hewan</h1>
                <p class="about-txt1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                </p>
                <p class="about-txt2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
                <div class="btn-more">
                    <a href="/about" class="btn text-lowercase" id="more-btn">Baca selengkapnya &nbsp; <img
                            src="{{ asset('assets/arrow-right.svg') }}" alt=""></a>
                </div>
            </div>

            <div class="tentang_right" id="gambar-tentang">
                <div class="image1">
                    <img class="gajah1" src="{{ asset('assets/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png') }}"
                        width="100%" alt="" srcset="" data-aos="fade-right">
                    <img class="komodo1" src="{{ asset('assets/x2/joshua-j-cotten-VCzNXhMoyBw-unsplash@2x.png') }}"
                        width="100%" alt="" srcset="" data-aos="fade-down">
                </div>
                <br>
                <div class="image2">
                    <img class="buaya1" src="{{ asset('assets/x2/kyle-nieber-3ryX0ShTMWg-unsplash@2x.png') }}"
                        width="114.3%" alt="" srcset="" data-aos="fade-up">
                </div>
            </div>
        </div>
    </section>
    {{-- END-OF-ABOUT --}}

    {{-- DETAIL --}}
    <section class="detail " id="detail" style="">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 revealUp">
                <div class="col-lg-12" style="">
                    <h1 class="detail-title" id="detail-title">Kami Membawa Anda <br>Untuk Mengetahui Lebih Dalam</h1>
                    <div class="cards-detail">
                        <div class="card" id="card-detail">
                            <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                                <img class="paw" src="{{ asset('assets/pawprint.svg') }}" alt="">
                            </div>
                            <h5 class="text-center" style="font-family: poppinsSemiBold">Lorem ipsum<br> dolor sit amet
                            </h5>
                            <p class="text-center fs-6 fw-bold"
                                style="font-family: poppinsRegular;margin:1rem;opacity:35%;">Lorem ipsum dolor, sit amet
                                consectetur adipisicing elit. </p>
                        </div>
                        <div class="card" id="card-detail">
                            <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                                <img class="paw" src="{{ asset('assets/pawprint.svg') }}" alt="">
                            </div>
                            <h5 class="text-center" style="font-family: poppinsSemiBold">Lorem ipsum<br> dolor sit amet
                            </h5>
                            <p class="text-center fs-6 fw-bold" style="font-family: poppinsRegular;margin:1rem;opacity:35%">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="card" id="card-detail">
                            <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                                <img class="paw" src="{{ asset('assets/pawprint.svg') }}" alt="">
                            </div>
                            <h5 class="text-center" style="font-family: poppinsSemiBold">Lorem ipsum<br> dolor sit amet
                            </h5>
                            <p class="text-center fs-6 fw-bold" style="font-family: poppinsRegular;margin:1rem;opacity:35%">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                        <div class="card" id="card-detail">
                            <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                                <img class="paw" src="{{ asset('assets/pawprint.svg') }}" alt="">
                            </div>
                            <h5 class="text-center" style="font-family: poppinsSemiBold">Lorem ipsum<br> dolor sit amet
                            </h5>
                            <p class="text-center fs-6 fw-bold"
                                style="font-family: poppinsRegular;margin:1rem;opacity:35%">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END-OF-DETAIL --}}

    {{-- BERITA --}}
    <section class="berita revealUp" style="margin-top:4rem;margin-left: rem">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-7">
                    <a href="/berita" style="text-decoration: none">
                        <h6 class="about-title text-uppercase">Berita</h6>
                        <h1 class="membangun">Baca Berita Terbaru Kami Dalam Tropisianimal</h1>
                    </a>
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
    {{-- END-OF-BERITA --}}

    {{-- GALERI --}}
    <section class="galeri mt-5" data-aos="fade-right">
        <div class="container px-4 px-lg-5 h-100 my-5 mt-3">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-9">
                    <a href="/galeri" style="text-decoration: none">
                        <h6 class="about-title text-uppercase">galeri</h6>
                        <h1 class="membangun">Lihat Lebih Banyak Hewan Tropis Pada Galeri Kami</h1>
                    </a>
                </div>
            </div>
        </div>
        <div class="row gx-0 justify-content-center my-auto" style="padding: 0;">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="carousel-inner-home" role="listbox">
                @foreach ($galleries as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" id="carousel-item-home" data-bs-interval="1500">
                        <div class="col-md-3">
                            <div class="card" style="border: 0">
                                <div class="card-img">
                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <a class="carousel-control-prev bg-transparent" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <span class="arrow-carousel-left"><img src="{{ asset('assets/arrow-right.svg') }}"
                            style="transform: rotate(180deg)" alt=""></span>
                </a>
                <a class="carousel-control-next bg-transparent" href="#recipeCarousel" role="button"
                    data-bs-slide="next" style="">
                    <span class="arrow-carousel-right"><img src="{{ asset('assets/arrow-right.svg') }}"
                            alt=""></span>
                </a>
            </div>
        </div>
    </section>

    <div class="MultiCarousel" data-items="1,3,5" data-slide="1" id="MultiCarousel" data-interval="1500">
        <div class="MultiCarousel-inner">
            @foreach ($galleries as $key => $item)
            <div class="item {{ $key == 0 ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $item->image) }}" class="d-block"
                    alt="...">
            </div>
            @endforeach
        </div>

        <a class="carousel-control-prev bg-transparent leftLst" data-bs-target="#carouselExampleInterval" role="button"
            data-bs-slide="prev">
            <span class="arrow-carousel-left"><img src="{{ asset('assets/arrow-right.svg') }}"
                    style="transform: rotate(180deg)" alt=""></span>
            <a class="carousel-control-next bg-transparent rightLst" data-bs-target="#carouselExampleInterval"
                role="button" data-bs-slide="next">
                <span class="arrow-carousel-left"><img src="{{ asset('assets/arrow-right.svg') }}"
                        alt=""></span>
            </a>
    </div>
    {{-- END-OF-GALERI --}}
@endsection
