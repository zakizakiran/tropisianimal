@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}!</h1><br>
</div>
<div class="img-container d-flex">
    <img class="img-fluid rounded-circle mt-3" src="{{ asset('storage/' . auth()->user()->image) }}" width="200px" style="height: 200px" alt="Your Profile Picture">
</div>
<style>
    @media screen and (max-width:640px){
    .img-fluid{
        margin: auto
    }
}
</style>
@endsection
