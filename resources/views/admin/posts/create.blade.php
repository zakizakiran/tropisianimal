@extends('adminlte::page')
@section('title', 'Post Create')

@section('content_header')
    <h1 style="font-weight: 600">Create Post</h1>
@stop
@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<div class="col-lg-8">
<form method="POST" action="/admin/post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label fw-bold">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="image" class="form-label fw-bold">Images</label>
        <img class="img-preview img-fluid mb-4 col-8 px-5">
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
            name="image" onchange="previewImage()" value="{{ old('image') }}">
        @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label fw-bold">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
            disable readonly value="{{ old('slug') }}">
        @error('slug')
            <div class="invalid-feedback">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body" style=""></trix-editor>
        @error('body')
            <p class="text-danger fs-normal">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-success mb-3">Create</button>

  </form>
</div>

<style>
    trix-toolbar [data-trix-button-group="file-tools"]{
        display: none;
    }
</style>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/admin/post/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

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
