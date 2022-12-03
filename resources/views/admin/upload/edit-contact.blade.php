@extends('adminlte::page')
@section('title', 'Contact Edit')
@section('content')

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Contact Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        #btn-confirm:hover {
            background: transparent;
            color: #198754;
        }
    </style>
</head>
@foreach ($contacts as $contact)
    <div class="d-flex justify-content-center">
        <div class="card my-5" style="width: 50rem">
            <div class="card-header">
                <h5 class="m-3">Edit Contact</h5>
            </div>
            <div class="card-body">
                <div class="m-3">
                    <form method="POST" action="/contact-settings/{{ $contact->id }}">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight: 600">Alamat</label>
                            <input type="text" class="form-control" id="location" name="location"
                                value="{{ $contact->location }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight: 600">Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telp"
                                value="{{ $contact->telp }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label" style="font-weight: 600">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ $contact->email }}">
                        </div>
                </div>
                <button type="submit" class="btn btn-success m-3" id="btn-confirm">Confirm Edit</button>
                </form>
                <a href="/contact-settings"><button class="btn btn-outline-danger"
                        onclick="return confirm(&quot; Data tidak tersimpan yakin keluar?&quot;)"><i
                            class="bi bi-x-circle"></i> Cancel</button></a>
            </div>
        </div>
    </div>
@endforeach
@endsection
