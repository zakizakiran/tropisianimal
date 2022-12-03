@extends('layouts.main')
@section('container')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet"
            href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>

    <body>
        <div class="main">
            <div class="home-icon">
                <a href="/">
                    <h2><i class="bi bi-house-fill"></i></h2>
                </a>
            </div>
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                    style="width: 80%;margin-left:2rem">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                        style="margin-top: 0"></button>
                </div>
            @endif
            <input type="checkbox" id="chk" aria-hidden="true">
            <div class="signup">
                <form action="/login/user" method="POST">
                    @csrf
                    <label for="chk" aria-hidden="true">User Login</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Email" required autofocus style="width: 80%">
                    @error('email')
                        <div class="invalid-feedback mx-5">
                            {{ $message }}
                        </div>
                    @enderror
                    <div id="show_hide_password">
                        <input type="password" class="form-control" name="password" placeholder="Password" required=""
                            style="width: 80%">
                        <div class="eye-icon mt-4">
                            <h5><a href="" style="text-decoration: none"><i class="bi bi-eye-slash-fill"></i> Show
                                    Password</a></h5>
                        </div>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <div class="link d-flex">
                    <a class="m-auto fw-bold" href="/login">Admin login here</a>
                </div>
            </div>


            <div class="login">
                <form action="/register" method="POST">
                    @csrf
                    <label for="chk" aria-hidden="true" style="padding: 1rem">Sign Up</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="Enter your name" required value="{{ old('name') }}" style="width: 80%">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        placeholder="Enter Email" required value="{{ old('email') }}" style="width: 80%">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <div id="show_hide_password">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Password" required="" style="width: 80%">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="eye-icon mt-4">
                            <h5><a href="" style="text-decoration: none"><i class="bi bi-eye-slash-fill"></i> Show
                                    Password</a></h5>
                        </div>
                    </div>
                    <button type="submit">Create Account</button>
                </form>
            </div>
        </div>
        <div class="background-img"
            style="background: #00811E;margin-left:4rem;margin-right:-8.3rem;padding:5rem;width:60%;height:100vh">
            <img src="{{ asset('assets/welcome2.svg') }}" width="400px" style="margin-left:6rem" alt="">
        </div>
        <script>
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bi-eye-slash-fill");
                        $('#show_hide_password i').removeClass("bi-eye-fill");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                        $('#show_hide_password i').addClass("bi-eye-fill");
                    }
                });
            });
        </script>
    </body>

    <style>
        body {
            background: none;
        }

        .background-img {
            border-radius: 0 0 0 800px
        }

        @media screen and (max-width: 640px) {
            .background-img {
                display: none
            }
        }
    </style>
@endsection
