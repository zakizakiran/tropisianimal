@extends('dashboard.layouts.main')
@section('container')
<div class="container rounded bg-white mb-5">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right mx-5 fs-3" id="title">My Profile</h4>
        </div>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center" style="margin-top: -2rem"><img class="rounded-circle mt-5" style="object-fit: cover" height="150px" width="150px" src="{{ asset('storage/' . auth()->user()->image) }}"><span class="font-weight-bold my-2">{{ auth()->user()->name }}</span><span class="text-black-50">{{ auth()->user()->email }}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="py-2">
                <div class="row mt-2">
                    <div class="col-md-8"><label class="labels mb-1 fw-bold">Name</label><input type="text" class="form-control" value="{{ auth()->user()->name }}" disable readonly></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8"><label class="labels mb-1 fw-bold">Email</label><input type="text" class="form-control" value="{{ auth()->user()->email }}" disable readonly></div>
                </div>
                <div class="mt-4" id="btn-edit"><a class="btn btn-dark profile-button" href="/dashboard-user/profile/{{ auth()->user()->id}}/edit">Edit Profile</a></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<style>

    @media screen and (max-width: 640px){
        #btn-edit{
            text-align: center;
        }

        #title{
            display: none;
        }
    }
</style>
@endsection
