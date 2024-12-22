<footer class="footer-container">
    <div class="footer-inner">
        <!-- Quick Links Column -->
        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <!-- Quick Links Code -->
            </ul>
        </div>

        <!-- Help Column -->
        <div class="footer-column">
            <h4>Help</h4>
            <ul class="footer-links">
                <!-- Help Links -->
            </ul>
        </div>

        <!-- Address Column -->
        <div class="footer-column">
            <h4>Address</h4>
            <p>{!! nl2br(e(setting('office-address.office_address', 'Default Address'))) !!}</p>
        </div>

        <!-- Office Location Column with Map -->
        <div class="footer-column">
            <h4>Office Location</h4>
            <div class="office-info-container">
                <div class="map-container">
                    @if (setting('office-address.google_map_url'))
                        <iframe 
                            src="{{ setting('office-address.google_map_url') }}" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
