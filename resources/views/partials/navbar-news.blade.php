<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <style>
        .navbar-brand {
            margin-left: 6.5rem
        }

        @media screen and (width: 1280px) {
            .navbar-brand {
                margin-left: 4.5rem
            }
        }

        @media screen and (min-width: 1440px) {
            .navbar-brand {
                margin-left: 4rem
            }
        }

        @media screen and (min-width: 1600px) {
            .navbar-brand {
                margin-left: 8.5rem;
            }
        }

        @media screen and (max-width: 1200px) {
            .navbar-brand {
                margin: 0
            }
        }

        @media screen and (max-width: 640px) {
            .navbar-brand {
                margin: 0
            }
        }

        @media screen and (min-width: 1620px){
            .navbar-brand{
            margin-left: 18rem;
          }
        }
    </style>
</head>

<body>
    <div id="mynavbar" style="">
        <nav class="autohide navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #121212;opacity:%"
            id="navbar">
            <div class="container-fluid" style="font-family: monsBold;">
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/x2/Tropisianimal@2x.png') }}"
                        width="150px" alt=""></a>
                <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around"
                    type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    id="navbarToggler">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto" style="margin: rem">
                        <hr style="color: white;margin-top:1rem">
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'HOME' ? 'active' : '' }}" aria-current="page"
                                href="/#masthead">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'TENTANG' ? 'active' : '' }}" href="/about">TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'BERITA' ? 'active' : '' }}" href="/berita">BERITA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'GALERI' ? 'active' : '' }}" href="/galeri">GALERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $title === 'KONTAK' ? 'active' : '' }}" href="/kontak">KONTAK</a>
                        </li>
                    </ul>
                </div>
        </nav>
    </div>
    </div>
    <script>
        // AUTOHIDE
        document.addEventListener("DOMContentLoaded", function() {

            el_autohide = document.querySelector('.autohide');
            navbar_height = document.querySelector('.autohide').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';

            if (el_autohide) {
                var last_scroll_top = 0;
                window.addEventListener('scroll', function() {
                    let scroll_top = window.scrollY;
                    if (scroll_top < last_scroll_top) {
                        el_autohide.classList.remove('scrolled-down');
                        el_autohide.classList.add('scrolled-up');
                    } else {
                        el_autohide.classList.remove('scrolled-up');
                        el_autohide.classList.add('scrolled-down');
                    }
                    last_scroll_top = scroll_top;
                });

            }
        });

        // CHANGE COLOR
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll > 200) {
                    $(".autohide").css("background", "#121212");
                } else {
                    $(".autohide").css("background", "#121212");
                }
            })
        });

        const btn = document.getElementById('navbarToggler');

        btn.addEventListener('click', () => {

            $(".autohide").css("background", "#121212");
        });
    </script>
</body>
