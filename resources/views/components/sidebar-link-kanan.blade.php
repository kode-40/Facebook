<a href="{{ $link }}" class="sidebar_link text-decoration-none d-flex align-items-center justify-content-start gap-3">
    <i {{ $attributes->merge(['class' => 'bi fs-2 text']) }}></i>
    <span>{{ $slot }}</span>
</a>