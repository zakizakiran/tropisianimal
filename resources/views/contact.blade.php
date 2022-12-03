@extends('layouts.main')
@section('container')
    <header class="masthead-about" id="masthead-about">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100">
                <div class="col-lg-6" id="title1" style="margin-left: -1rem">
                    <h1 class="text-white" id="kontak-kami">Kontak kami</h1>
                </div>
            </div>
        </div>
    </header>

    <head>
    </head>

    <body>
        <iframe data-aos="fade-down" id="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558851650418!2d107.66179861431733!3d-6.9432060698981015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1652335693222!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h2 class="contact-title" style="font-family: poppinsExtraBold;color:black">Kontak kami</h2>
        <form action="/mail" method="POST" id="form-contact">
            @csrf
            <div class="container-contact">
                <div class="textarea-description">
                    <div class="form-floating">
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi"
                            id="deskripsi"></textarea>
                        <label for="deskripsi">Deskripsi</label>
                        @error('description')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="contact-right">
                    <div class="input-right">
                        <div class="form-floating mb-4" style="width:300px;height:50px;margin-left:1rem;">
                            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror"
                                id="floatingInput" placeholder="Subject">
                            <label for="floatingInput">Subject</label>
                            @error('subject')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4" style="width:300px;height:50px;margin-left:1rem">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="floatingInput" placeholder="Nama" required>
                            <label for="floatingInput">Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-2" style="width:300px;height:50px;margin-left:1rem">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="floatingInput" placeholder="Email" required>
                            <label for="floatingInput">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn-submit" style="margin-left: 1rem;margin-top:1rem">Kirim &nbsp;
                            <img class="sendIcon" src="{{ asset('assets/send.svg') }}" /></button>
                    </div>
                </div>

            </div>
        </form>
        <div class="cards-contact" data-aos="fade-up">
            @foreach ($contacts as $item)
                <div class="card" id="card-contact">
                    <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                        <a href="mailto:{{ $item->email }}" target="_blank">
                            <img class="contact-icon" src="{{ asset('assets/mail.svg') }}" width="20px" alt="">
                        </a>
                    </div>
                    <p class="text-center" style="font-family: poppinsBold">Email</p>
                    <p class="text-center fs-6 fw-bold" style="font-family: poppinsRegular;margin:0;opacity:35%;">
                        {{ $item->email }}</p>
                </div>
                <div class="card" id="card-contact">
                    <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                        <a href="tel:{{ $item->telp }}">
                            <img class="contact-icon" src="{{ asset('assets/phone.svg') }}" width="20px"
                                style="margin-top: 1.1rem" alt="">
                        </a>
                    </div>
                    <p class="text-center" style="font-family: poppinsBold">Phone</p>
                    <p class="text-center fs-6 fw-bold" style="font-family: poppinsRegular;margin:0;opacity:35%;">
                        {{ $item->telp }}</p>
                </div>
                <div class="card" id="card-contact">
                    <div class="circle" style="margin-top:2rem;margin-bottom:1rem">
                        <a href="https://goo.gl/maps/FqrkE1ZVD45N1fCC9" target="_blank">
                            <img class="contact-icon" src="{{ asset('assets/map-pin.svg') }}" width="20px"
                                style="margin-top:1rem" alt="">
                        </a>
                    </div>
                    <p class="text-center" style="font-family: poppinsBold">Location</p>
                    <div class="d-flex justify-content-center">
                        <p class="text-center col-8 fs-6 fw-bold"
                            style="font-family: poppinsRegular;margin:0;opacity:35%;">
                            {{ $item->location }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
@endsection
