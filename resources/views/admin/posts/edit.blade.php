@extends('adminlte::page')
@section('title', 'Edit Post')

@section('content_header')
    <h1 style="font-weight: 600">Edit Post</h1>
@stop

@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css") }}">
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
</head>
<div class="col-lg-8 my-4">
<form method="POST" action="/admin/post/{{ $post->slug }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label fw-bold">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label fw-bold">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug"  value="{{ $post->slug }}"disable readonly>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label fw-bold">Images</label>
        <input type="hidden" name="oldImage" value="{{ $post->image }}">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-4 col-8 px-5 my-3 d-block">
        @else
            <img class="img-preview img-fluid mb-4 col-8 px-5">
        @endif
        <input class="form-control" type="file" id="image" name="image"  onchange="previewImage()">
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input id="body" type="hidden" name="body" value="{{ $post->body }}">
            <trix-editor input="body"></trix-editor>
        </div>
    </div>
    <button type="submit" class="btn btn-success mb-3">Update Post</button>
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
