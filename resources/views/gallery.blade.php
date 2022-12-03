@extends('layouts.main')
@section('container')
    <header class="masthead-about" id="masthead-about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-6" id="title1" style="margin-left: -1rem">
                    <h1 class="text-white" id="galeri-title">Galeri</h1>
                </div>
            </div>
        </div>
    </header>
    <section class="galeri-view">

        <div id="carousel-gallery" class="carousel slide" data-bs-ride="carousel" data-aos="fade">
            <div class="carousel-inner">
                @foreach ($carousels as $key => $item)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                        <img class="myImages" id="myImg" src="{{ asset('storage/' . $item->image_carousel) }}"
                            width="100%" height="530px" class="d-block" alt="...">
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-gallery" data-bs-slide="prev">
                <span class="arrow-carousel-left" id="arrow-gallery-prev"><img src="{{ asset('assets/arrow-right.svg') }}"
                        style="transform: rotate(180deg)" alt=""></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-gallery" data-bs-slide="next">
                <span class="arrow-carousel-right" id="arrow-gallery-next"><img src="{{ asset('assets/arrow-right.svg') }}"
                        alt=""></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="content">
            <div class="images-gallery">
                <div class="image-gallery">
                    @foreach ($galleries as $gallery)
                        <img class="myImages" id="myImg" src="{{ asset('storage/' . $gallery->image) }}"
                            style="height:200px;object-fit:cover" data-aos="fade-down" alt="">
                    @endforeach

                    {{-- Modal Viewer --}}
                    <div id="myModal" class="modal">
                        <span class="close"><i class="bi bi-x"></i></span>
                        <img class="modal-content" id="img01" style="">
                    </div>

                </div>
            </div>
        </div>
        <div class="pagination d-flex my-4">
            <div class="page m-auto" style="z-index: -1">
                {{ $galleries->links('pagination::bootstrap-4') }}
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <button id="loadMore" class="btn btn-primary mt-3">Load More...</button>
        </div> --}}
        <script>
            $(document).ready(function() {
                $(".content").slice(0, 6).show();
                $("#loadMore").on("click", function(e) {
                    e.preventDefault();
                    $(".content:hidden").slice(0, 3).slideDown();
                    if ($(".content:hidden").length == 0) {
                        $("#loadMore").text("No Content").addClass("noContent");
                    }
                });
            })
        </script>
    </section>
@endsection
