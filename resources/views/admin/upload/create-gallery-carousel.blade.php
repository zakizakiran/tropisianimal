@extends('adminlte::page')
@section('title', 'Gallery Post')

@section('content_header')
<h1>Carousel Image Upload Form</h1>
@stop

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        a{text-decoration: none}
        #btn-upload:hover{
            background: transparent;
            color: #198754;
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <form method="POST" action="/upload-gallery-carousel" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Upload Images Carousel</label>
        <img class="img-preview img-fluid mb-4 col-sm-3 px-5">
        <input class="form-control" type="file" id="image" name="image"  onchange="previewImage()">
    </div>
    <button class="btn btn-success" type="submit" id="btn-upload"><i class="bi bi-arrow-bar-up"></i> Upload</button>
    </form>

    <a href="/gallery-settings"><button class="btn btn-outline-danger my-2"><i class="bi bi-x-circle"></i> Cancel</button></a>

</body>
<script>
    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@stop
