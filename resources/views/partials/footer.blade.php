<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<footer class="site-footer-tablet mt-5" style="background-color: #121212">
    <div class="container-footer container d-flex text-light">
        <div class="row gx-4 gx-lg-5 h-100" id="row-footer">
            <div class="col-lg-5" style="margin-bottom:2rem">
                <img src="{{ asset('assets/x2/Tropisianimal@2x.png') }}" width="150px" alt="logo"
                    class="footer-heading mb-4">
                <p class="col-lg-8 opacity-75" style="width: 75%;margin-left:rem;font-family:poppinsRegular">Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Cum repellendus pariatur ad reprehenderit, saepe error
                    sint quo. Ipsa, impedit eum.</p>
                <a class="fb-icon" href="https://facebook.com" target="_blank"><img
                        src="{{ asset('assets/x2/001-facebook@2x.png') }}" width="35px"></a>
                <a class="twt-icon" href="https://twitter.com/zakizakiran28" target="_blank"><img
                        class="mx-2" src="{{ asset('assets/x2/002-twitter@2x.png') }}" width="35px"></a>
            </div>

            <div class="container-footer-link">
                <div id="footer-links " class="col-lg-2">
                    <h5 class="footer-heading mb-4">Useful links</h5>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-white" style="text-decoration: none;">Home</a></li>
                        <li><a href="/berita" class="text-white" style="text-decoration: none;">Berita</a></li>
                        <li><a href="/galeri" class="text-white" style="text-decoration: none;">Galeri</a></li>
                    </ul>
                </div>

                <div id="footer-links" class="col-lg-2">
                    <h5 class="footer-heading mb-4">Privacy</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white" style="text-decoration: none;">Karir</a></li>
                        <li><a href="/about" class="text-white" style="text-decoration: none;">Tentang Kami</a></li>
                        <li><a href="/kontak" class="text-white" style="text-decoration: none;">Kontak Kami</a></li>
                        <li><a href="#" class="text-white" style="text-decoration: none;">Servis</a></li>
                    </ul>
                </div>

                <div id="footer-links" class="col-lg-3">
                    <h5 class="footer-heading mb-4">Contact Info</h5>
                    @foreach ($contacts as $item)
                        <ul class="list-unstyled">
                            <li><img src="{{ asset('assets/mail.svg') }}"><a href="mailto:{{ $item->email }}"
                                    target="_blank" class="mx-1 text-white" style="text-decoration: none">
                                    {{ $item->email }}</a></li>
                            <li><img src="{{ asset('assets/phone.svg') }}"><a href="tel:{{ $item->telp }}"
                                    class="mx-2 text-white" style="text-decoration: none">{{ $item->telp }}</a></li>
                            <li><img src="{{ asset('assets/map-pin.svg') }}"><a
                                    href="https://goo.gl/maps/FqrkE1ZVD45N1fCC9" target="_blank" class="mx-1 text-white"
                                    style="text-decoration: none"> {{ $item->location }}</a></li>
                        </ul>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
    <div class="copy text-light d-flex justify-content-center opacity-75" style="padding-bottom: 25px;">
        <span style="font-family: poppinsMedium">Copyright &copy;2022 All right reserved</span>
    </div>
</footer>

<footer class="site-footer mt-5" style="background-color: #121212" id="footer-responsive">
    <div class="container-footer container d-flex text-light">
        <div class="row gx-4 gx-lg-5 h-100" id="row-footer">
            <div class="col-lg-5" style="margin-bottom:2rem">
                <img src="{{ asset('assets/x2/Tropisianimal@2x.png') }}" width="150px" alt="logo"
                    class="footer-heading mb-4">
                <p class="col-lg-8 opacity-75" style="width: 75%;margin-left:rem;font-family:poppinsRegular">Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Cum repellendus pariatur ad reprehenderit, saepe error
                    sint quo. Ipsa, impedit eum.</p>
                <a class="fb-icon" href="https://facebook.com" target="_blank"><img
                        src="{{ asset('assets/x2/001-facebook@2x.png') }}" width="35px"></a>
                <a class="twt-icon" href="https://twitter.com/zakizakiran28" target="_blank"><img
                        class="mx-2" src="{{ asset('assets/x2/002-twitter@2x.png') }}" width="35px"></a>
            </div>

            <div id="footer-links " class="col-lg-2">
                <h5 class="footer-heading mb-4">Useful links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white" style="text-decoration: none;">Home</a></li>
                    <li><a href="/berita" class="text-white" style="text-decoration: none;">Berita</a></li>
                    <li><a href="/galeri" class="text-white" style="text-decoration: none;">Galeri</a></li>
                </ul>
            </div>

            <div id="footer-links" class="col-lg-2">
                <h5 class="footer-heading mb-4">Privacy</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white" style="text-decoration: none;">Karir</a></li>
                    <li><a href="/about" class="text-white" style="text-decoration: none;">Tentang Kami</a></li>
                    <li><a href="/kontak" class="text-white" style="text-decoration: none;">Kontak Kami</a></li>
                    <li><a href="#" class="text-white" style="text-decoration: none;">Servis</a></li>
                </ul>
            </div>

            <div id="footer-links" class="col-lg-3">
                <h5 class="footer-heading mb-4">Contact Info</h5>
                @foreach ($contacts as $item)
                    <ul class="list-unstyled">
                        <li><img src="{{ asset('assets/mail.svg') }}"><a href="mailto:{{ $item->email }}"
                                target="_blank" class="mx-1 text-white" style="text-decoration: none">
                                {{ $item->email }}</a></li>
                        <li><img src="{{ asset('assets/phone.svg') }}"><a href="tel:{{ $item->telp }}"
                                class="mx-2 text-white" style="text-decoration: none">{{ $item->telp }}</a></li>
                        <li><img src="{{ asset('assets/map-pin.svg') }}"><a
                                href="https://goo.gl/maps/FqrkE1ZVD45N1fCC9" target="_blank" class="mx-1 text-white"
                                style="text-decoration: none"> {{ $item->location }}</a></li>
                    </ul>
                @endforeach
            </div>

        </div>
    </div>
    <div class="copy text-light d-flex justify-content-center opacity-75" style="padding-bottom: 25px;">
        <span style="font-family: poppinsMedium">Copyright &copy;2022 All right reserved</span>
    </div>
</footer>
