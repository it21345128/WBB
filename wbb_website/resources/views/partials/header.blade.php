<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ setting('site.title', 'Default Title') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <header class="header-container">
            <div class="header-top">
                <!-- Logo -->
                <div class="logo-container">
                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Site Logo">
                </div>

                <!-- Title -->
                <div class="site-title">
                    <h1>{{ setting('site.title', 'Default Title') }}</h1>
                </div>

                <!-- Hotline and Help Section -->
                <div class="hotline-help-container">
                    <div class="help-section">
                        <a href="/help"><i class="fa fa-phone"></i> Need help?</a>
                    </div>
                    <a href="tel:{{ setting('header.hotline', '1924') }}" class="hotline-button">
                        Hotline: {{ setting('header.hotline', '1924') }}
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="nav-bar">
                <nav class="navigation">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @foreach (\App\Models\Page::all() as $page)
                            <li><a href="{{ url($page->slug) }}">{{ $page->title }}</a></li>
                        @endforeach
                    </ul>

                    <!-- Careers and Languages Inline -->
                    <div class="nav-extras">
                        <a href="{{ setting('header.careers') }}" class="job-button">Careers</a>
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
                    </div>
                </nav>
            </div>

            <!-- Address -->
            <div class="address">
                <h2>{{ setting('header.address', 'J R Jayawardena Centre, Town Hall') }}</h2>
            </div>
        </header>
    </body>
</html>
