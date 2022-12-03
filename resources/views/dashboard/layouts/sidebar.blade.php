<head>
    <link rel="stylesheet"
        href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css') }}">
</head>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
    <div class="position-sticky pt-3" style="margin-left: -1rem">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard-user') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard-user">
                    {{-- <span data-feather="home"></span> --}}
                    <i class="bi bi-house-fill"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard-user/post') ? 'active' : '' }}"
                    href="/dashboard-user/post">
                    {{-- <span data-feather="file-text"></span> --}}
                    <i class="bi bi-file-earmark-post-fill"></i>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard-user/profile') ? 'active' : '' }}"
                    href="/dashboard-user/profile">
                    {{-- <span data-feather="file-text"></span> --}}
                    <i class="bi bi-person-fill"></i>
                    My Profile
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Advanced</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <i class="bi bi-gear-fill"></i>
            </a>
        </h6>
        <ul class="nav -flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    Go to Web
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </li>

        </ul>
    </div>
</nav>
