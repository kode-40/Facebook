@extends('layouts.main')

@section('title')
    Facebook
@endsection

@section('content')
    <aside class="col-3">
        <x-sidebar-link-kiri class="bi-person-circle" link="{{ route('register') }}">
            Christoper
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-people-fill" link="{{ route('login') }}">
            Teman
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-clock-history" link="{{ route('register') }}">
            Kenangan
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-bookmark-fill" link="{{ route('login') }}">
            Tersimpan
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-person-lines" link="{{ route('register') }}">
            Group
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-play-btn" link="{{ route('login') }}">
            Video
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-shop" link="{{ route('register') }}">
            Marketplace
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-newspaper" link="{{ route('login') }}">
            Kabar
        </x-sidebar-link-kiri>
        <x-sidebar-link-kiri class="bi-arrow-down-circle-fill" link="{{ route('login') }}">
            See more
        </x-sidebar-link-kiri>
    </aside>
    <main class="col-6 p-3">
        <div class="card container-fluid">
            <div class="row mb-2 d-flex align-items-center justify-content-center gap-3">
                <div class="col-2">
                    <i class="bi bi-person-circle fs-1 text"></i>
                </div>
                <div class="col-8 gap-3">
                    <div class="d-flex justify-content-between align-items-center">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-secondary w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Apa yang anda pikirkan adolf jeremy nainggolan?
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4 w-100 d-flex align-items-center justify-content-between gap-2">
                    <a href=""
                        class="d-flex  align-items-center justify-content-center text-decoration-none text-center">
                        <i class="bi bi-camera-reels"></i>
                        <span>Siaran Langsung</span>
                    </a>
                    <a href=""
                        class="d-flex  align-items-center justify-content-center text-decoration-none text-center">
                        <i class="bi bi-file-earmark-image"></i>
                        <span>Foto/Video</span>
                    </a>
                    <a href=""
                        class="d-flex  align-items-center justify-content-center text-decoration-none text-center">
                        <i class="bi bi-emoji-laughing"></i>
                        <span>Perasaan/aktivitas</span>
                    </a>
                </div>
                <div class="col-4"></div>
                <div class="col-4"></div>
            </div>
        </div>
    </main>
    <div class="right_bar col-3">
        <p>Bersponsor</p>
        <hr class="border border-secondary w-100 border-1 opacity-25">
        <p>kontak</p>
        <x-sidebar-link-kanan class="bi-person-circle" link="{{ route('login') }}">
            Adolf Jeremy Nainggolan
        </x-sidebar-link-kanan>
        <x-sidebar-link-kanan class="bi-person-circle" link="{{ route('register') }}">
            Christoper
        </x-sidebar-link-kanan>
        <x-sidebar-link-kanan class="bi-person-circle" link="{{ route('login') }}">
            Andy
        </x-sidebar-link-kanan>
        <x-sidebar-link-kanan class="bi-person-circle" link="{{ route('register') }}">
            Budi
        </x-sidebar-link-kanan>
        <x-sidebar-link-kanan class="bi-person-circle" link="{{ route('login') }}">
            Wati
        </x-sidebar-link-kanan>
    </div>
@endsection