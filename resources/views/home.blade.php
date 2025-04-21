@extends('layouts.auth')
@section('title')
home
@endsection

@section('content')
<header>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid relative">
    <div class="col-12 text-center">
    <a class="navbar-brand text-primary fw-bolder text-center" href="#">
    Facebook
    </a>
    <form class="position-absolute" style="right: 10px; top: 5px;" method="POST" action="{{ route('logout') }}">
        @csrf
    <button class="btn btn-sm btn-danger">Log Out</button>
    </form>
    </div>
    </div>
    </nav>
    </header>
    <main class="flex flex-col w-full flex-1 px-20 text-center">
    <div class="container">
    <div class="col-12 d-flex align-items-center justify-content-center">
    <h1 class="fs-3 text font-semibold text-dark">
    Status
    </h1>
    </div>
    </div>
    <section class="mt-5">
    <div class="container">
    <div class="row">
    <div class="col-4">
    <div class="card">
    <div class="card-body">
    <a href="{{ route('status') }}" class="btn btn-secondary">Create Status</a>
    </div>
    </div>
    </div>
        
    <div class="col-4">
    <div class="card">
    <div class="card-body">
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                @foreach ($statuses as $status)
                <div class="col-12 mb-3">
                    <div class="card">
                    <div class="card-body text-start">
                        <div class="d-flex justify-content-between align-items-start">
                            <p><strong>{{ $status->user->nama_depan }} :</strong></p>
                        </div>
                        <div>
                            <p>{{ $status->text }}</p>
                        </div>
                        <div class="text-end">
                            <a href="{{route('comment', $status->id)}}" class="btn btn-secondary">Comment</a>
                        </div>
                            <p><strong>Comment :</strong></p>
                            @foreach ($status->comment as $item)
                            <p><strong>{{ $item->user->nama_depan }} :</strong></p>
                            <p>{{ $item->text }}</p>
                            @endforeach
                        </div>

                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    </div>
    </main>
@endsection
