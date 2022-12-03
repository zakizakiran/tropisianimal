<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<div id="mynavbar">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black;height:4rem" id="navbar">
        <div class="container-fluid" style="width: 150%">
            <a class="navbar-brand" href="/dashboard-user"><img src="{{ asset('assets/x2/Tropisianimal@2x.png') }}"
                    width="150px" alt=""></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasExample"" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-captalize fw-semibold fs-6 my-2 ms-auto text-center" style="">
                    <li class="nav-item my-2" id="logout-link">
                        <form action="/logout/user" method="POST">
                            @csrf
                            <button type="submit" class="btn nav-link px-3">Logout <i
                                    class="bi bi-box-arrow-right fs-6"></i> </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="offcanvas offcanvas-end" style="background: #121212" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="/dashboard-user"><img src="{{ asset('assets/x2/Tropisianimal@2x.png') }}"
                width="150px" alt=""></a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body text-white">
        <hr class="text-secondary border-2 opacity-50" style="margin-top: -0.5rem">
        <ul class="navbar-nav text-captalize fw-semibold fs-6 my-2 ms-auto text-center" style="">
            <li class="nav-item my-2" id="hidden-list">
                <a class="nav-link" aria-current="page" href="/dashboard-user">Dashboard</a>
            </li>
            <li class="nav-item my-2" id="hidden-list">
                <a class="nav-link" href="/dashboard-user/post">My Posts</a>
            </li>
            <li class="nav-item my-2" id="hidden-list">
                <a class="nav-link" href="/dashboard-user/profile">My Profile</a>
            </li>
            <li class="nav-item my-2" id="logout-link">
                <form action="/logout/user" method="POST">
                    @csrf
                    <button type="submit" class="btn nav-link px-3">Logout <i class="bi bi-box-arrow-right fs-6"></i>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
</div>
<style>
    #hidden-list {
        display: none
    }

    @media screen and (max-width:640px) {
        #hidden-list {
            display: inline;
        }

        #logout-link {
            margin: auto
        }
    }
</style>
