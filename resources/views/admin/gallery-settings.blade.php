@extends('adminlte::page')
@section('title', 'Gallery Post Settings')

@section('content_header')
    <h1>Gallery Post Settings</h1>
@stop

@section('content')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <style>
            a {
                text-decoration: none
            }

            #btn-upload:hover {
                background: transparent;
                color: #198754;
            }

            table {
                counter-reset: tableCount;
            }

            .counterCell:before {
                content: counter(tableCount);
                counter-increment: tableCount;
            }

            .row .col div {
                min-height: 20rem;
            }

            .overlay:hover .middle {
                opacity: 1;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }
        </style>
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <a href="/upload-gallery"><button class="btn btn-success" id="btn-upload"><i class="bi bi-cloud-arrow-up"></i> Upload
                Image Gallery</button></a>
        <a href="/upload-gallery-carousel"><button class="btn btn-outline-success my-3"><i
                    class="bi bi-cloud-arrow-up-fill"></i> Upload Image Carousel</button></a>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center m-auto" role="alert" style="width:100%">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3 class="my-4">Gallery Images</h3>
        <table class="table table-bordered table-hover" style="margin-bottom:rem">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">Images</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center">
                @foreach ($galleries as $gallery)
                    <tr>
                        <td class="p-3"><img src="{{ asset('storage/' . $gallery->image) }}" width="100px"
                                alt=""></td>
                        <td>
                            <form action="/upload-gallery/{{ $gallery->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger m-3" type="submit"
                                    onclick="return confirm(&quot; Anda yakin menghapus gambar? &quot;)"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination d-flex">
            <div class="page m-auto">
                {{ $galleries->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <section>
            <h3 class="my-4">Carousel Images</h3>
            <table class="table table-bordered table-hover" style="">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">Images</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider text-center">
                    @foreach ($carousels as $item)
                        <tr>
                            <td class="p-3"><img src="{{ asset('storage/' . $item->image_carousel) }}"
                                    width="100px" alt=""></td>
                            <td>
                                <form action="/upload-gallery-carousel/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger m-3" type="submit"
                                        onclick="return confirm(&quot; Anda yakin menghapus gambar? &quot;)"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </body>



@stop
