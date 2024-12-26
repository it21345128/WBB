<div class="nav-bar">
    <nav class="navigation">
        <ul>
            <!-- Static "Home" link -->
            <li><a href="{{ url('/') }}">Home</a></li>

            <!-- Dynamically generated links for other pages -->
            @foreach (\App\Models\Page::all() as $page)
                @if ($page->slug !== 'home') {{-- Skip "home" if it's dynamically added --}}
                    <li><a href="{{ url($page->slug) }}">{{ $page->title }}</a></li>
                @endif
            @endforeach
        </ul>
    </nav>
</div>
