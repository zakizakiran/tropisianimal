@extends('adminlte::page')
{{-- @extends('layouts.dashboardlayout') --}}
@section('title', 'Contact Settings')

@section('content_header')
<h1>Contact Settings</h1>
@stop

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        a{text-decoration: none}
        .btn:hover{
            color: #198754;
            background: transparent
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <div class="card">
        <div class="card-header text-bold">
            Contact Edit
        </div>
        <div class="card-body">
            <div class="email">
                <p class="fw-semibold">Email</p>
                <p>{{ $contacts->email }}</p>
            </div>
            <div class="alamat">
                <p class="fw-semibold">Alamat</p>
                <p>{{ $contacts->location }}</p>
            </div>
            <div class="Telepon">
                <p class="fw-semibold">Telepon</p>
                <p>{{ $contacts->telp }}</p>
            </div>
        </div>
        <div class="card-footer">
            <a href="/contact-settings/{{ $contacts->id }}/edit" class="btn btn-success badge rounded-pill"
                style="width: 100%;padding:0.5rem;height:40px"><h5><i class="bi bi-pencil-square"></i></h5></a>
        </div>
    </div>
</body>

@stop
