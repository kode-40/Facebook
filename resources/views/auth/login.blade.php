@extends('layouts.auth')
@section('title')
  login
@endsection

@section('content')
<main class="d-flex align-items-center vh-100 gap-5">
<div class="d-flex text-left flex-column w-75 align-items-center">
    <p style="font-size: 50px;font-family: inherit;color: blue">
        <b>facebook</b></p>
    <p style="font-size: xx-large;">
        Connect with friends and the world<br>around you on Facebook.</p>
</div>


    <form method="post" class="w-25" action="{{ route('login-post') }}">
        @csrf
        @if ($errors->any())
<span  role="alert">
    @foreach ($errors->all() as $error)
        <strong class="text-danger">{{ $error }}</strong>
    @endforeach
</span>
@endif
        <br>
            <div class="input-group flex-nowrap mb-4">
                <input type="email" name="email" class="form-control" placeholder="Email or phone number" aria-label="email" required>
            </div> 
            <div class="input-group flex-nowrap mb-4">
                <input type="password" name="password" class="form-control" placeholder="password" aria-label="password" required>
              </div>
            <div>
                <button type="submit" class="btn btn-primary"
                style="--bs-btn-padding-y: .813rem; --bs-btn-padding-x: 10rem; --bs-btn-font-size: .938rem;">
                login
                </button>
            </div><br>
    <div>    
        <p style="color: blue;text-align: center;cursor: pointer;margin-left: 115px; margin-right: 115px;margin-bottom: 20px;">Forget password?</p>
        <hr>
    </div>
    <div class="col-4 mx-auto">
        <a href="{{ route('register') }}" class="btn btn-success active">New account</a>
    </div><br>
    </form>
</main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ asset('style.css') }}">
@endpush
