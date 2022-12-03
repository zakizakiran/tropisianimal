@extends('layouts.main')
@section('container')

    <header class="masthead-about" id="masthead-about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-6" id="title1" style="margin-left: -1rem">
                    <h1 class="about-title-show text-white">Tentang kami</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="tentang " style="margin-top:6rem;margin-bottom:6rem" id="tentang">
        <div class="container tentang_container" data-aos="fade-right">
            <div class="tentang_left">
                <h1 class="membangun">Tropisianimal</h1>
                <p class="about-txt1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                </p>
                <p class="about-txt2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
            </div>

            <div class="tentang_right">
                <div class="image1">
                    <img class="gajah1"
                        src="{{ asset('assets/x2/kyaw-tun-_YIX48_4hgs-unsplash@2x.png') }}" width="100%"
                        alt="" srcset="" data-aos="fade-right">
                    <img class="komodo1" src="{{ asset('assets/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png') }}"
                        width="100%" alt="" srcset="" data-aos="fade-down">
                </div>
                <br>
                <div class="image2">
                    <img class="buaya1" src="{{ asset('assets/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png') }}"
                        width="114.3%" alt="" srcset="" data-aos="fade-up">
                </div>
            </div>
        </div>
    </section>

    <section class="visi" data-aos="fade-right">
        <div style="margin-left:4rem;margin-top:8rem">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-8 gx-lg-5 h-100">
                    <div class="col-lg-20">
                        <h1 class="membangun">Visi</h1>
                        <p class="about-txt1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias hic a sequi harum ullam tempora,
                            aut nisi quasi, saepe corporis fuga autem rem nemo dolorum quis rerum voluptates accusantium
                            perspiciatis repellendus officia consequuntur reprehenderit libero cumque sapiente! Animi vitae
                            molestias vel quasi tenetur sunt inventore dolorem minima similique odit, consequuntur, dicta
                            expedita magnam soluta. Unde odit earum voluptatem. Quaerat, nisi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="misi" data-aos="fade-right">
        <div class="misi" style="margin-left:4rem;margin-top:2.5rem">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-8 gx-lg-5 h-100">
                    <div class="col-lg-20">
                        <h1 class="membangun">Misi</h1>
                        <p class="about-txt1">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias hic a sequi harum ullam tempora,
                            aut nisi quasi, saepe corporis fuga autem rem nemo dolorum quis rerum voluptates accusantium
                            perspiciatis repellendus officia consequuntur reprehenderit libero cumque sapiente! Animi vitae
                            molestias vel quasi tenetur sunt inventore dolorem minima similique odit, consequuntur, dicta
                            expedita magnam soluta. Unde odit earum voluptatem. Quaerat, nisi?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
