<header class="header-container">
    <div class="header-top">
        <!-- Logo -->
        <div class="logo-container">
            <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Site Logo">
        </div>

        <!-- Title -->
        <div class="site-title">
            <h1>{{ Voyager::setting('site.title', 'Default Title') }}</h1> <!-- 'Default Title' is a fallback if not set -->
        </div>

        <!-- Hotline -->
        <div class="hotline-container">
            <a href="Hotline:{{ setting('header.hotline', '1924') }}" class="hotline-button">
                Hotline: {{ setting('header.hotline', '1924') }}
            </a>
        </div>
    </div>

    
    <!-- Navigation Bar -->
    <div class="nav-bar">
        <nav class="navigation">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/media">Media</a></li>
                <li><a href="/publication">Publication</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="/download">Download</a></li>
                <li><a href="/public-issues">Public Issues</a></li>
            </ul>
        </nav>

       

        <!-- Job Button -->
        <div class="job-container">
            <a href="{{ setting('header.Careers') }}" class="job-button" download>Careers</a>
        </div>

         <!-- Language Switcher -->
         <div class="language-switcher">
            @php
                $languages = setting('header.languages');
                $languagesArray = json_decode($languages, true);
            @endphp

            @if(is_array($languagesArray))
                @foreach ($languagesArray as $language)
                    <a href="{{ $language['url'] }}">
                        <button class="language-button">{{ $language['name'] }}</button>
                    </a>
                @endforeach
            @else
                <button class="language-button">No languages available</button>
            @endif
        </div>

        <!-- Address -->
        <div class="address">
            <span>J.R. Jayawardena Centre, Town Hall</span>
        </div>
    </div>

    <!-- Help Section -->
    <div class="help-section">
        <a href="/help"><i class="fa fa-phone"></i> Need help?</a>
    </div>
</header>