<footer class="footer-container">
    <div class="footer-inner">
        <!-- Quick Links Column -->
        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                @php
                    $quickLinks = json_decode(setting('footer.quick_links', '[]'), true);
                @endphp

                @if (!empty($quickLinks) && is_array($quickLinks))
                    @foreach ($quickLinks as $link)
                        <li>
                            <a href="{{ $link['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer">
                                {{ $link['title'] ?? 'Untitled' }}
                            </a>
                        </li>
                    @endforeach
                @else
                    <li>No links available</li>
                @endif
            </ul>
        </div>

        <!-- Social Media Links Column -->
        <div class="footer-column">
            <h4>Follow Us</h4>
            <ul class="social-links">
                @php
                    $socialLinks = json_decode(setting('footer.social_links', '[]'), true);
                @endphp

                @if (!empty($socialLinks) && is_array($socialLinks))
                    @foreach ($socialLinks as $social)
                        <li>
                            <a href="{{ $social['url'] ?? '#' }}" target="_blank" rel="noopener noreferrer">
                                <img src="{{ $social['icon'] ?? '#' }}" alt="{{ $social['platform'] ?? 'Social' }}" style="width: 24px; height: 24px;">
                            </a>
                        </li>
                    @endforeach
                @else
                    <li>No social media links available</li>
                @endif
            </ul>
        </div>

        <!-- Address Column -->
        <div class="footer-column">
            <h4>Address</h4>
            <p>{!! nl2br(e(setting('footer.office_address', 'Default Address'))) !!}</p>
        </div>

        <!-- Office Location Column with Map -->
        <div class="footer-column">
            <h4>Office Location</h4>
            <div class="office-info-container">
                <div class="map-container">
                    @if (setting('footer.google_map_url'))
                        <iframe 
                            src="{{ setting('footer.google_map_url') }}" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    @endif
                </div>
                 <!-- Help Column -->
     <div class="footer-column">
        @if (setting('footer.help'))
            <img 
                src="{{ setting('footer.help') }}" 
                alt="Footer Image" 
                style="max-width: 100%; height: auto;">
        @else
            <p>No image available</p>
        @endif
    </div>
            </div>
        </div>
    </div>

    

  <!-- Footer Bottom Section -->
<div class="footer-bottom">
    <p>
        © {{ date('Y') }} {!! setting('footer.copyright', 'Copyright: Welfare Benefits Board - WBB') !!}
    </p>
    
    <p>
        {!! setting('footer.developer', 'Developed by: Your Company or Developer Name') !!}
    </p>
</div>
</footer>

