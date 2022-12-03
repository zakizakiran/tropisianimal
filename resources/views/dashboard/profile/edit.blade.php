@extends('dashboard.layouts.main')
@section('container')
    <div class="container rounded bg-white mb-5">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right fs-3" id="title">Profile Settings</h4>
            </div>
            <div class="col-md-3 border-right" id="img-form">
                <input type="hidden" name="oldImage" value="{{ auth()->user()->image }}">
                <div class="d-flex flex-column align-items-center text-center"><img class="mt-5" style=""
                        height="150px" width="150px" src="{{ asset('storage/' . auth()->user()->image) }}">
                </div>
            </div>
            <div class="col-md-5 border-right" id="container-form">
                <form method="POST" action="/dashboard-user/profile/{{ Auth::User()->id }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <label for="image" class="form-label fw-bold">Profile Picture</label>
                    <input type="hidden" name="oldImage" value="{{ $user->image }}">
                    @if ($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}"
                            class="img-preview img-fluid mb-4 col-8 px-5 my-3 d-block">
                    @else
                        <img class="img-preview img-fluid mb-4 col-8 px-5">
                    @endif
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()" <div
                        class="py-2">
                    <div class="row mt-2">
                        <div class="col-md-8"><label class="labels mb-1 fw-bold">Name</label><input type="text"
                                name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ auth()->user()->name }}"></div>
                    </div>
                    <div class="mt-4 mb-3" id="btn-edit"><button class="btn btn-outline-success profile-button"
                            type="submit">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <style>
        #title{
            margin-left: 1.5rem
        }
        @media screen and (max-width: 640px) {
            #btn-edit {
                text-align: center;
            }
            #title{
                margin-left: 0
            }
            #container-form{
                margin-top: 2rem
            }
            #img-form{
                margin-top: -2rem
            }
        }
    </style>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
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

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
