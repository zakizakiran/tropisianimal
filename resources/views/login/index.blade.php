@extends('layouts.main')
@section('container')
{{-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css") }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.22/dist/vanta.waves.min.js"></script>
<link rel="stylesheet" href="{{ asset("css/login.css") }}">
</head>
<body>
    <div class="brand">
        <h1 class="text-white" style="margin-right: 6rem">Welcome To <br>Tropisianimal <br> <img class="my-3" src="{{ asset("assets/pawprint.svg") }}" width="50px" style="margin-left: 7rem" /></h1>
    </div>
    <div class="main mt-3" style="z-index: 1">
		<div class="home-icon">
		<a href="/"><h2><i class="bi bi-house-fill"></i></h2></a>
		</div>
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 80%;margin-left:2rem">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="margin-top: 0"></button>
        </div>
        @endif
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="/login" method="POST">
                    @csrf
					<label for="chk" aria-hidden="true">Login Admin</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autofocus style="width: 80%">
                    @error('email')
                    <div class="invalid-feedback mx-5">
                      {{ $message }}
                    </div>
                    @enderror
					<div id="show_hide_password">
						<input type="password" class="form-control" name="password" placeholder="Password" required="" style="width: 80%">
						<div class="eye-icon mt-4">
							<h5><a href="" style="text-decoration: none"><i class="bi bi-eye-slash-fill"></i> Show Password</a></h5>
						</div>
					</div>
					<button type="submit">Login</button>
				</form>
                <div class="link d-flex">
                    <a class="m-auto fw-bold" href="/login/user">User login here</a>
                </div>
            </div>
	</div>
</body>
</html> --}}
<!doctype html>
<html lang="en">

<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login2.css">

</head>

<body class="img js-fullheight" style="background: url(../assets/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png)">
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Admin Login</h3>
                        <form action="/login" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control fw-bold btn btn-primary submit px-3">Sign In</button>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; User? &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="/login/user" class="px-2 py-2 ml-md-1 rounded"><span
                                    class="ion-logo-twitter mr-2"></span> Login as user</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
@endsection
