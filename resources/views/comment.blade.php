@extends('layouts.auth')
@section('title')
comment
@endsection

@section('content')
<form method="post" class="flex-container" action="{{ route('comment-post', $status) }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <input type="text" class="form-control" name="text" placeholder="Tulis Komentar" aria-label="Tulis Komentar" required>
                <button type="submit" name="submit_comment">
                <span class="input-group-text" id="basic-addon2">↗</span></button>
            </div>
        </div>
    </div>
</form>
@endsection

@push ('addon-style')
<style>
    .flex-container {
        display: flex;
        background-color: #f0f2f5;
    }
    .flex-container > div {
        background-color: white;
        width: 50%;
        padding: 50px;
        margin-left: 20%;
    }
    .button {
        cursor: pointer;
    }
</style>
@endpush